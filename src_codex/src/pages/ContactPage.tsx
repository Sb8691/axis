import {
  ArrowUpRight,
  ClipboardCheck,
  Mail,
  MapPin,
  MessageSquareText,
  Phone,
  SlidersHorizontal,
  UserRound,
} from 'lucide-react'
import { ContactForm } from '../components/contact/ContactForm'
import { PageHero } from '../components/layout/PageHero'
import { Seo } from '../components/Seo'
import { company } from '../data/company'
import { assetUrl } from '../lib/assets'

const reassurance = [
  { title: 'Nezáväzná konzultácia', description: 'Spoločne prejdeme základné potreby projektu.', icon: MessageSquareText },
  { title: 'Riešenie na mieru', description: 'Návrh prispôsobíme vašej prevádzke.', icon: SlidersHorizontal },
  { title: 'Technická konzultácia', description: 'Zhodnotíme dostupné technické možnosti.', icon: ClipboardCheck },
  { title: 'Priamy kontakt', description: 'Môžete nám zavolať alebo napísať e-mail.', icon: UserRound },
]

export function ContactPage() {
  return (
    <>
      <Seo
        title="Kontakt | AXIS Energy Solutions"
        description={`Kontaktujte ${company.legalName} pre nezáväznú konzultáciu energetického projektu. Telefón ${company.phoneDisplay}, e-mail ${company.email}.`}
        path="/kontakt"
      />
      <main id="main-content">
        <PageHero
          title="Kontaktujte nás"
          breadcrumb="Kontakt"
          description="Máte otázky alebo záujem o nezáväznú konzultáciu? Radi s vami prejdeme váš projekt a jeho technické možnosti."
          image={assetUrl('images/solar-rooftop.webp')}
          imageAlt="Fotovoltické panely na priemyselnej streche"
          imageWidth={1200}
          imageHeight={630}
        />

        <section className="border-b border-slate-200 bg-white py-14 sm:py-16" aria-label="Možnosti konzultácie">
          <div className="site-container grid gap-x-10 gap-y-9 sm:grid-cols-2 lg:grid-cols-4">
            {reassurance.map(({ title, description, icon: Icon }, index) => (
              <article key={title} className={index > 0 ? 'lg:border-l lg:border-slate-200 lg:pl-9' : ''}>
                <Icon className="h-8 w-8 text-[#a1ba00]" strokeWidth={1.7} aria-hidden="true" />
                <h2 className="mt-4 text-base font-extrabold text-ink">{title}</h2>
                <p className="mt-1.5 text-sm leading-6 text-slate-600">{description}</p>
              </article>
            ))}
          </div>
        </section>

        <section className="bg-soft py-20 sm:py-24 lg:py-28" aria-labelledby="contact-details-title">
          <div className="site-container grid gap-14 lg:grid-cols-[0.78fr_1.22fr] lg:gap-16 xl:gap-24">
            <div>
              <p className="eyebrow">Priamy kontakt</p>
              <h2 id="contact-details-title" className="section-title mt-3 text-ink">Kde nás nájdete</h2>
              <address className="mt-9 space-y-7 not-italic">
                <div className="flex gap-4">
                  <span className="flex h-12 w-12 shrink-0 items-center justify-center border border-lime text-[#91a900]"><MapPin className="h-6 w-6" aria-hidden="true" /></span>
                  <div>
                    <p className="text-xs font-extrabold uppercase tracking-[0.12em] text-slate-500">Adresa</p>
                    <p className="mt-2 text-base font-bold leading-7 text-ink">{company.legalName}<br />{company.address.street}<br />{company.address.postalCode} {company.address.city}<br />{company.address.country}</p>
                  </div>
                </div>
                <div className="grid gap-7 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                  <div className="flex gap-4">
                    <span className="flex h-12 w-12 shrink-0 items-center justify-center border border-lime text-[#91a900]"><Phone className="h-6 w-6" aria-hidden="true" /></span>
                    <div>
                      <p className="text-xs font-extrabold uppercase tracking-[0.12em] text-slate-500">Telefón</p>
                      <a href={company.phoneHref} className="mt-2 inline-flex min-h-11 items-center py-2 font-extrabold text-ink transition-colors hover:text-[#7f9500] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime">{company.phoneDisplay}</a>
                    </div>
                  </div>
                  <div className="flex gap-4">
                    <span className="flex h-12 w-12 shrink-0 items-center justify-center border border-lime text-[#91a900]"><Mail className="h-6 w-6" aria-hidden="true" /></span>
                    <div className="min-w-0">
                      <p className="text-xs font-extrabold uppercase tracking-[0.12em] text-slate-500">E-mail</p>
                      <a href={`mailto:${company.email}`} className="mt-2 inline-flex min-h-11 max-w-full items-center break-all py-2 font-extrabold text-ink transition-colors hover:text-[#7f9500] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime">{company.email}</a>
                    </div>
                  </div>
                </div>
              </address>

              <div className="relative mt-9 flex min-h-[260px] flex-col justify-between overflow-hidden border border-slate-200 bg-white p-6 sm:p-8">
                <div className="absolute inset-0 opacity-60 [background-image:linear-gradient(#dce5e9_1px,transparent_1px),linear-gradient(90deg,#dce5e9_1px,transparent_1px)] [background-size:34px_34px]" aria-hidden="true" />
                <div className="absolute -right-16 top-8 h-56 w-56 rounded-full border-[32px] border-lime/15" aria-hidden="true" />
                <span className="relative flex h-14 w-14 items-center justify-center bg-navy text-lime"><MapPin className="h-7 w-7" aria-hidden="true" /></span>
                <div className="relative mt-10">
                  <p className="font-extrabold text-ink">Gogoľova 18, Bratislava</p>
                  <a href={company.mapUrl} target="_blank" rel="noreferrer" className="button-secondary mt-4 w-full sm:w-auto">
                    Zobraziť na mape
                    <ArrowUpRight className="h-4 w-4" aria-hidden="true" />
                  </a>
                </div>
              </div>
              <p className="mt-6 text-xs leading-6 text-slate-500">{company.registry}</p>
            </div>

            <div>
              <p className="eyebrow">Projektový dopyt</p>
              <h2 className="section-title mt-3 text-ink">Napíšte nám</h2>
              <p className="mt-4 max-w-xl text-base leading-7 text-slate-600">Vyplňte údaje o projekte. Formulár overí povinné polia; produkčné odosielanie bude potrebné pripojiť k serveru AXIS.</p>
              <div className="mt-9 border border-slate-200 bg-white p-5 shadow-card sm:p-8 lg:p-9">
                <ContactForm />
              </div>
            </div>
          </div>
        </section>

        <section className="relative overflow-hidden bg-navy py-16 text-white sm:py-20" aria-labelledby="direct-call-title">
          <img src={assetUrl('images/axis-industrial-solar.webp')} alt="" width="1170" height="658" loading="lazy" className="absolute inset-0 h-full w-full object-cover opacity-20" />
          <div className="absolute inset-0 bg-gradient-to-r from-navy via-navy/90 to-navy/55" aria-hidden="true" />
          <div className="site-container relative grid gap-8 lg:grid-cols-[1fr_auto] lg:items-center">
            <div>
              <p className="text-sm font-bold text-white/70">Nechcete čakať?</p>
              <h2 id="direct-call-title" className="mt-2 text-3xl font-extrabold tracking-[-0.035em] sm:text-4xl">Zavolajte nám priamo</h2>
              <p className="mt-3 text-base text-white/65">Radi s vami telefonicky prejdeme základné potreby projektu.</p>
            </div>
            <a href={company.phoneHref} className="flex min-h-20 items-center gap-4 border border-white/25 bg-navy/60 px-6 py-4 text-left transition-colors hover:border-lime focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime sm:min-w-[390px]">
              <span className="flex h-12 w-12 shrink-0 items-center justify-center border border-lime/50 text-lime"><Phone className="h-6 w-6" aria-hidden="true" /></span>
              <span><small className="block text-xs font-medium text-white/55">alebo volajte</small><strong className="mt-1 block text-xl text-lime sm:text-2xl">{company.phoneDisplay}</strong></span>
            </a>
          </div>
        </section>
      </main>
    </>
  )
}
