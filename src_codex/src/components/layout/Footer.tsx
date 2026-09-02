import { Mail, MapPin, Phone } from 'lucide-react'

const footerGroups = [
  {
    title: 'Riešenia',
    links: [
      { label: 'Fotovoltické elektrárne', href: '/fotovoltaika' },
      { label: 'Energetické riešenia', href: '/energeticke-riesenia' },
      { label: 'LED osvetlenie', href: '/led-osvetlenie' },
      { label: 'Servis a údržba', href: '#kontakt' },
    ],
  },
  {
    title: 'Spoločnosť',
    links: [
      { label: 'Referencie', href: '#referencie' },
      { label: 'O nás', href: '#o-nas' },
      { label: 'Ako pracujeme', href: '#ako-pracujeme' },
      { label: 'Kontakt', href: '#kontakt' },
    ],
  },
]

export function Footer() {
  return (
    <footer className="bg-navy-950 text-white">
      <div className="site-container grid gap-12 py-14 sm:grid-cols-2 lg:grid-cols-[1.25fr_0.8fr_0.8fr_1.1fr] lg:gap-10 lg:py-20">
        <div>
          <a
            href="#top"
            aria-label="AXIS Energy Solutions – domov"
            className="inline-block bg-white p-2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime"
          >
            <img src="/images/axis-logo.webp" alt="AXIS Energy Solutions" width="428" height="187" className="w-[145px]" loading="lazy" />
          </a>
          <p className="mt-6 max-w-sm text-[15px] leading-7 text-white/65">
            Projekty, inžiniering, inštalácia a servis fotovoltických elektrární, energetických riešení a LED osvetlenia.
          </p>
        </div>

        {footerGroups.map((group) => (
          <div key={group.title}>
            <h2 className="text-xs font-extrabold uppercase tracking-[0.16em] text-white">{group.title}</h2>
            <ul className="mt-5 space-y-3">
              {group.links.map((link) => (
                <li key={link.label}>
                  <a className="footer-link" href={link.href}>{link.label}</a>
                </li>
              ))}
            </ul>
          </div>
        ))}

        <div>
          <h2 className="text-xs font-extrabold uppercase tracking-[0.16em] text-white">Kontakt</h2>
          <address className="mt-5 space-y-4 not-italic text-[15px] text-white/65">
            <a href="tel:+421948465331" className="footer-contact">
              <Phone className="h-4 w-4 text-lime" aria-hidden="true" />
              +421 948 465 331
            </a>
            <a href="mailto:axises@axis.sk" className="footer-contact">
              <Mail className="h-4 w-4 text-lime" aria-hidden="true" />
              axises@axis.sk
            </a>
            <p className="flex items-start gap-3 leading-6">
              <MapPin className="mt-1 h-4 w-4 shrink-0 text-lime" aria-hidden="true" />
              <span>AXIS ES s.r.o.<br />Gogoľova 18<br />851 05 Bratislava</span>
            </p>
          </address>
        </div>
      </div>

      <div className="border-t border-white/10">
        <div className="site-container flex flex-col gap-5 py-7 text-xs text-white/45 sm:flex-row sm:items-center sm:justify-between">
          <p>© 2026 AXIS ES s.r.o. Všetky práva vyhradené.</p>
          <div className="flex flex-wrap gap-x-6 gap-y-3">
            <a className="transition-colors hover:text-white" href="/documents/axis-gdpr.pdf" target="_blank" rel="noreferrer">
              Ochrana osobných údajov
            </a>
          </div>
        </div>
      </div>
    </footer>
  )
}
