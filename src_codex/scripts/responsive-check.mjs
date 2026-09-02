const endpoint = process.argv[2] ?? 'http://127.0.0.1:9223'
const targetUrl = process.argv[3] ?? 'http://127.0.0.1:5173/'
const widths = [375, 390, 430, 768, 1024, 1280, 1440]

const target = await fetch(`${endpoint}/json/new?${encodeURIComponent(targetUrl)}`, { method: 'PUT' }).then((response) => response.json())
const socket = new WebSocket(target.webSocketDebuggerUrl)
const pending = new Map()
let sequence = 0

socket.addEventListener('message', (event) => {
  const message = JSON.parse(event.data)
  if (message.id && pending.has(message.id)) {
    const { resolve, reject } = pending.get(message.id)
    pending.delete(message.id)
    if (message.error) reject(new Error(message.error.message))
    else resolve(message.result)
  }
})

await new Promise((resolve, reject) => {
  socket.addEventListener('open', resolve, { once: true })
  socket.addEventListener('error', reject, { once: true })
})

const send = (method, params = {}) => new Promise((resolve, reject) => {
  const id = ++sequence
  pending.set(id, { resolve, reject })
  socket.send(JSON.stringify({ id, method, params }))
})

await send('Page.enable')
await send('Runtime.enable')

const results = []

for (const width of widths) {
  await send('Emulation.setDeviceMetricsOverride', {
    width,
    height: 900,
    deviceScaleFactor: 1,
    mobile: width < 768,
  })
  await send('Page.navigate', { url: `${targetUrl}?viewport=${width}` })
  await new Promise((resolve) => setTimeout(resolve, 700))

  const response = await send('Runtime.evaluate', {
    expression: `JSON.stringify({
      viewport: window.innerWidth,
      documentWidth: document.documentElement.scrollWidth,
      bodyWidth: document.body.scrollWidth,
      overflowingElements: [...document.querySelectorAll('body *')]
        .filter((element) => {
          const rect = element.getBoundingClientRect();
          return rect.right > window.innerWidth + 1 || rect.left < -1;
        })
        .slice(0, 8)
        .map((element) => ({ tag: element.tagName, className: element.className, rect: element.getBoundingClientRect().toJSON() }))
    })`,
    returnByValue: true,
  })

  results.push({ requestedWidth: width, ...JSON.parse(response.result.value) })
}

await send('Emulation.setDeviceMetricsOverride', {
  width: 390,
  height: 844,
  deviceScaleFactor: 1,
  mobile: true,
})
await send('Page.navigate', { url: `${targetUrl}?interaction=mobile-menu` })
await new Promise((resolve) => setTimeout(resolve, 700))
await send('Runtime.evaluate', {
  expression: `document.querySelector('button[aria-controls="mobile-navigation"]').click()`,
})
await new Promise((resolve) => setTimeout(resolve, 100))

const openMenu = await send('Runtime.evaluate', {
  expression: `JSON.stringify({
    expanded: document.querySelector('button[aria-controls="mobile-navigation"]').getAttribute('aria-expanded'),
    menuHidden: document.querySelector('#mobile-navigation').getAttribute('aria-hidden'),
    bodyOverflow: getComputedStyle(document.body).overflow,
    consultationLinkVisible: document.querySelector('#mobile-navigation a[href="#kontakt"]').getBoundingClientRect().height >= 44
  })`,
  returnByValue: true,
})

await send('Input.dispatchKeyEvent', { type: 'keyDown', key: 'Escape', code: 'Escape' })
await send('Input.dispatchKeyEvent', { type: 'keyUp', key: 'Escape', code: 'Escape' })
await new Promise((resolve) => setTimeout(resolve, 100))

const closedMenu = await send('Runtime.evaluate', {
  expression: `JSON.stringify({
    expanded: document.querySelector('button[aria-controls="mobile-navigation"]').getAttribute('aria-expanded'),
    menuHidden: document.querySelector('#mobile-navigation').getAttribute('aria-hidden'),
    focusReturned: document.activeElement === document.querySelector('button[aria-controls="mobile-navigation"]')
  })`,
  returnByValue: true,
})

console.log(JSON.stringify({
  viewports: results,
  mobileMenu: {
    open: JSON.parse(openMenu.result.value),
    afterEscape: JSON.parse(closedMenu.result.value),
  },
}, null, 2))
socket.close()
