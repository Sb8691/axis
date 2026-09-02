import { Menu, Phone, X } from 'lucide-react'
import { useEffect, useRef, useState } from 'react'

const navItems = [
  { label: 'Riešenia', href: '#riesenia' },
  { label: 'Referencie', href: '#referencie' },
  { label: 'O nás', href: '#o-nas' },
  { label: 'Kontakt', href: '#kontakt' },
]

export function Header() {
  const [isOpen, setIsOpen] = useState(false)
  const menuButtonRef = useRef<HTMLButtonElement>(null)

  useEffect(() => {
    const handleKeyDown = (event: KeyboardEvent) => {
      if (event.key === 'Escape' && isOpen) {
        setIsOpen(false)
        menuButtonRef.current?.focus()
      }
    }

    document.addEventListener('keydown', handleKeyDown)
    document.body.classList.toggle('overflow-hidden', isOpen)

    return () => {
      document.removeEventListener('keydown', handleKeyDown)
      document.body.classList.remove('overflow-hidden')
    }
  }, [isOpen])

  const closeMenu = () => setIsOpen(false)

  return (
    <header className="sticky top-0 z-50 border-b border-slate-200/80 bg-white/95 backdrop-blur">
      <div className="site-container flex h-[74px] items-center justify-between lg:h-[86px]">
        <a href="#top" className="relative z-50 inline-flex rounded-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime" aria-label="AXIS Energy Solutions – domov">
          <img
            src="/images/axis-logo.webp"
            alt="AXIS Energy Solutions"
            className="h-auto w-[130px] lg:w-[154px]"
            width="428"
            height="187"
          />
        </a>

        <nav className="hidden items-center gap-7 lg:flex xl:gap-9" aria-label="Hlavná navigácia">
          {navItems.map((item) => (
            <a
              key={item.href}
              href={item.href}
              className="text-[13px] font-bold text-ink transition-colors hover:text-[#7f9500] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime"
            >
              {item.label}
            </a>
          ))}
        </nav>

        <div className="hidden items-center gap-5 lg:flex xl:gap-7">
          <a
            href="tel:+421948465331"
            className="inline-flex min-h-11 items-center gap-2 text-[13px] font-extrabold text-ink transition-colors hover:text-[#7f9500] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime"
          >
            <Phone className="h-4 w-4 text-[#9bb400]" aria-hidden="true" />
            +421 948 465 331
          </a>
          <a href="#kontakt" className="button-primary px-5 xl:px-7">
            Nezáväzná konzultácia
          </a>
        </div>

        <button
          ref={menuButtonRef}
          type="button"
          className="relative z-50 inline-flex h-12 w-12 items-center justify-center text-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime lg:hidden"
          aria-expanded={isOpen}
          aria-controls="mobile-navigation"
          aria-label={isOpen ? 'Zavrieť menu' : 'Otvoriť menu'}
          onClick={() => setIsOpen((open) => !open)}
        >
          {isOpen ? <X className="h-7 w-7" aria-hidden="true" /> : <Menu className="h-7 w-7" aria-hidden="true" />}
        </button>
      </div>

      <div
        id="mobile-navigation"
        className={`absolute inset-x-0 top-full z-40 h-[calc(100dvh-74px)] bg-navy transition-[opacity,visibility] duration-300 lg:hidden ${
          isOpen ? 'visible opacity-100' : 'invisible opacity-0'
        }`}
        aria-hidden={!isOpen}
      >
        <nav className="site-container flex h-full flex-col overflow-y-auto py-8" aria-label="Mobilná navigácia">
          <div className="divide-y divide-white/10 border-y border-white/10">
            {navItems.map((item) => (
              <a
                key={item.href}
                href={item.href}
                onClick={closeMenu}
                className="flex min-h-16 items-center justify-between text-xl font-bold text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-inset focus-visible:outline-lime"
                tabIndex={isOpen ? 0 : -1}
              >
                {item.label}
                <span className="text-lime" aria-hidden="true">→</span>
              </a>
            ))}
          </div>
          <div className="mt-auto space-y-4 pt-9">
            <a
              href="tel:+421948465331"
              onClick={closeMenu}
              className="flex min-h-14 items-center justify-center gap-3 border border-white/25 px-5 text-base font-bold text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-lime"
              tabIndex={isOpen ? 0 : -1}
            >
              <Phone className="h-5 w-5 text-lime" aria-hidden="true" />
              +421 948 465 331
            </a>
            <a
              href="#kontakt"
              onClick={closeMenu}
              className="button-primary w-full"
              tabIndex={isOpen ? 0 : -1}
            >
              Nezáväzná konzultácia
            </a>
          </div>
        </nav>
      </div>
    </header>
  )
}
