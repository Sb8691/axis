import { Mail, MapPin, Phone } from 'lucide-react'
import { Link } from 'react-router-dom'
import { company } from '../../data/company'
import { assetUrl } from '../../lib/assets'

const footerGroups = [
  {
    title: 'Riešenia',
    links: [
      { label: 'Fotovoltické elektrárne', href: '/riesenia/fotovoltika' },
      { label: 'Batériové systémy', href: '/riesenia/bateriove-systemy' },
      { label: 'Energetické riadenie', href: '/riesenia/energeticke-riesenia' },
      { label: 'LED osvetlenie', href: '/riesenia/led-osvetlenie' },
    ],
  },
  {
    title: 'Spoločnosť',
    links: [
      { label: 'Referencie', href: '/referencie' },
      { label: 'O nás', href: '/o-nas' },
      { label: 'Ako pracujeme', href: '/o-nas#ako-pracujeme' },
      { label: 'Kontakt', href: '/kontakt' },
    ],
  },
]

export function Footer() {
  return (
    <footer className="bg-navy-950 text-white">
      <div className="site-container grid gap-12 py-14 sm:grid-cols-2 lg:grid-cols-[1.25fr_0.8fr_0.8fr_1.1fr] lg:gap-10 lg:py-20">
        <div>
          <Link
            to="/"
            aria-label="AXIS Energy Solutions – domov"
            className="inline-block bg-white p-2 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime"
          >
            <img src={assetUrl('images/axis-logo-brand.webp')} alt="AXIS Energy Solutions" width="768" height="384" className="w-[145px]" loading="lazy" />
          </Link>
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
                  <Link className="footer-link" to={link.href}>{link.label}</Link>
                </li>
              ))}
            </ul>
          </div>
        ))}

        <div>
          <h2 className="text-xs font-extrabold uppercase tracking-[0.16em] text-white">Kontakt</h2>
          <address className="mt-5 space-y-4 not-italic text-[15px] text-white/65">
            <a href={company.phoneHref} className="footer-contact">
              <Phone className="h-4 w-4 text-lime" aria-hidden="true" />
              {company.phoneDisplay}
            </a>
            <a href={`mailto:${company.email}`} className="footer-contact">
              <Mail className="h-4 w-4 text-lime" aria-hidden="true" />
              {company.email}
            </a>
            <p className="flex items-start gap-3 leading-6">
              <MapPin className="mt-1 h-4 w-4 shrink-0 text-lime" aria-hidden="true" />
              <span>{company.legalName}<br />{company.address.street}<br />{company.address.postalCode} {company.address.city}</span>
            </p>
          </address>
        </div>
      </div>

      <div className="border-t border-white/10">
        <div className="site-container flex flex-col gap-5 py-7 text-xs text-white/45 sm:flex-row sm:items-center sm:justify-between">
          <p>© 2026 {company.legalName} Všetky práva vyhradené.</p>
          <a className="transition-colors hover:text-white" href={company.privacyDocument} target="_blank" rel="noreferrer">
            Ochrana osobných údajov
          </a>
        </div>
      </div>
    </footer>
  )
}
