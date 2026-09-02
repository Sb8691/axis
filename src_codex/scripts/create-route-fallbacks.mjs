import { copyFile, mkdir } from 'node:fs/promises'
import { resolve } from 'node:path'

const routes = [
  'riesenia',
  'riesenia/fotovoltika',
  'riesenia/bateriove-systemy',
  'riesenia/energeticke-riesenia',
  'riesenia/led-osvetlenie',
  'referencie',
  'referencie/fotovolticka-elektraren-600-kwp',
  'referencie/fotovolticka-elektraren-121-kwp',
  'referencie/strojarne-detva',
  'referencie/petrzalska-plavaren',
  'referencie/way-industries-krupina',
  'referencie/trencianske-mineralne-vody',
  'referencie/verejne-osvetlenie-krupina',
  'o-nas',
  'kontakt',
]

const distDirectory = resolve('dist')
const source = resolve(distDirectory, 'index.html')

await Promise.all(routes.map(async (route) => {
  const routeDirectory = resolve(distDirectory, route)
  await mkdir(routeDirectory, { recursive: true })
  await copyFile(source, resolve(routeDirectory, 'index.html'))
}))

console.log(`Created GitHub Pages fallbacks for ${routes.length} application routes.`)
