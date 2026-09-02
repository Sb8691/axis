import { ArrowRight, Phone } from 'lucide-react'
import { Link } from 'react-router-dom'
import { company } from '../../data/company'

type ConsultationCtaProps = {
  title?: string
  description?: string
}

export function ConsultationCta({
  title = 'Máte projekt? Radi vám pomôžeme.',
  description = 'Ozvite sa nám a pripravíme nezáväzný návrh riešenia na mieru.',
}: ConsultationCtaProps) {
  return (
    <section className="relative overflow-hidden border-t border-slate-200 bg-soft py-12 sm:py-14" aria-labelledby="consultation-title">
      <div className="absolute inset-0 bg-[linear-gradient(120deg,transparent_0%,rgba(199,230,0,0.08)_100%)]" aria-hidden="true" />
      <div className="site-container relative grid gap-7 lg:grid-cols-[1fr_auto] lg:items-center">
        <div>
          <h2 id="consultation-title" className="text-2xl font-extrabold tracking-[-0.03em] text-ink sm:text-3xl">{title}</h2>
          <p className="mt-2 max-w-2xl text-base leading-7 text-slate-600">{description}</p>
        </div>
        <div className="grid gap-3 sm:grid-cols-2 lg:min-w-[540px]">
          <Link to="/kontakt" className="button-primary w-full">
            Dohodnúť konzultáciu
            <ArrowRight className="h-4 w-4" aria-hidden="true" />
          </Link>
          <a href={company.phoneHref} className="inline-flex min-h-14 items-center justify-center gap-3 border border-slate-300 bg-white px-5 py-2 text-sm font-extrabold text-ink transition-colors hover:border-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime">
            <Phone className="h-5 w-5 text-[#91a900]" aria-hidden="true" />
            <span><small className="block text-[10px] font-medium text-slate-500">alebo volajte</small>{company.phoneDisplay}</span>
          </a>
        </div>
      </div>
    </section>
  )
}
