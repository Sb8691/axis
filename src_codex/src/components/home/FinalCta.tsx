import { ArrowRight, Phone } from 'lucide-react'
import { Link } from 'react-router-dom'
import { company } from '../../data/company'
import { assetUrl } from '../../lib/assets'

export function FinalCta() {
  return (
    <section id="kontakt" className="relative scroll-mt-20 overflow-hidden bg-navy py-16 text-white sm:py-20" aria-labelledby="cta-title">
      <img
        src={assetUrl('images/axis-industrial-solar.webp')}
        alt=""
        width="1170"
        height="658"
        loading="lazy"
        className="absolute inset-0 h-full w-full object-cover object-center"
      />
      <div className="absolute inset-0 bg-navy/90 sm:bg-gradient-to-r sm:from-navy sm:via-navy/90 sm:to-navy/65" aria-hidden="true" />
      <div className="site-container relative z-10 grid gap-9 lg:grid-cols-[1fr_auto] lg:items-center">
        <div>
          <p className="eyebrow">Urobte prvý krok</p>
          <h2 id="cta-title" className="mt-3 max-w-2xl text-3xl font-extrabold leading-tight tracking-[-0.035em] text-white sm:text-4xl lg:text-5xl">
            Koľko môžete ušetriť práve vy?
          </h2>
          <p className="mt-4 text-base leading-7 text-white/70 sm:text-lg">Nezáväzná konzultácia a predbežný návrh zdarma.</p>
        </div>
        <div className="grid gap-3 sm:grid-cols-2 lg:min-w-[520px]">
          <Link to="/kontakt" className="button-primary w-full">
            Dohodnúť konzultáciu
            <ArrowRight className="h-4 w-4" aria-hidden="true" />
          </Link>
          <a href={company.phoneHref} className="button-phone w-full">
            <Phone className="h-5 w-5 text-lime" aria-hidden="true" />
            <span><small className="block text-[10px] font-medium text-white/55">alebo volajte</small>{company.phoneDisplay}</span>
          </a>
        </div>
      </div>
    </section>
  )
}
