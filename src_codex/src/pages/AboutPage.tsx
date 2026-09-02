import {
  BadgeCheck,
  CalendarCheck,
  ChartNoAxesCombined,
  ClipboardList,
  Crosshair,
  Gauge,
  Handshake,
  HardHat,
  Layers3,
  Search,
  ShieldCheck,
  UsersRound,
  Wrench,
} from 'lucide-react'
import { StatsStrip } from '../components/common/StatsStrip'
import { ConsultationCta } from '../components/layout/ConsultationCta'
import { PageHero } from '../components/layout/PageHero'
import { Seo } from '../components/Seo'
import { assetUrl } from '../lib/assets'

const principles = [
  { title: 'Naším cieľom je výsledok', description: 'Riešenie hodnotíme podľa jeho prínosu pre konkrétnu prevádzku.', icon: Crosshair },
  { title: 'Spoľahlivosť a kvalita', description: 'Dôraz kladieme na technický návrh, realizáciu a následný servis.', icon: ShieldCheck },
  { title: 'Komplexné riešenia', description: 'Projekt koordinujeme od analýzy až po uvedenie do prevádzky.', icon: Layers3 },
  { title: 'Dlhodobé partnerstvá', description: 'Vzťahy s klientmi staviame na zodpovednosti a otvorenej komunikácii.', icon: Handshake },
]

const approach = [
  { number: '01', title: 'Analýza a konzultácia', description: 'Analyzujeme potreby, spotrebu a technické možnosti.', icon: Search },
  { number: '02', title: 'Návrh riešenia', description: 'Pripravíme technický návrh a ekonomické vyhodnotenie.', icon: ClipboardList },
  { number: '03', title: 'Overení partneri', description: 'Zapojíme vhodných dodávateľov technológií a subdodávateľov.', icon: Handshake },
  { number: '04', title: 'Realizácia projektu', description: 'Koordinujeme dodávku, montáž, revízie a uvedenie do prevádzky.', icon: HardHat },
  { number: '05', title: 'Monitoring a optimalizácia', description: 'Sledujeme výkon systému a navrhujeme ďalšie zlepšenia.', icon: ChartNoAxesCombined },
  { number: '06', title: 'Servis a podpora', description: 'Zabezpečujeme pravidelný servis, údržbu a technickú podporu.', icon: BadgeCheck },
]

const stats = [
  { value: '10+', label: 'rokov skúseností', icon: CalendarCheck },
  { value: '300+', label: 'LED projektov', icon: UsersRound },
  { value: 'FVE do 1 MW', label: 'realizované projekty', icon: Gauge },
  { value: 'Kompletný servis', label: 'od návrhu po prevádzku', icon: Wrench },
]

export function AboutPage() {
  return (
    <>
      <Seo
        title="O nás | AXIS Energy Solutions"
        description="AXIS prináša firmám technicky premyslené energetické riešenia, projektovú koordináciu a dlhodobý servis."
        path="/o-nas"
      />
      <main id="main-content">
        <PageHero
          title="O nás"
          breadcrumb="O nás"
          description="Pomáhame firmám znižovať náklady na energiu pomocou technicky premyslených a overených riešení. Preberáme zodpovednosť za koordináciu projektu od prvého návrhu po servis."
          image={assetUrl('images/axis-industrial-solar.webp')}
          imageAlt="Priemyselná fotovoltická realizácia spoločnosti AXIS"
        />

        <section className="border-b border-slate-200 bg-white py-16 sm:py-20" aria-label="Princípy spoločnosti AXIS">
          <div className="site-container grid gap-x-10 gap-y-10 sm:grid-cols-2 lg:grid-cols-4">
            {principles.map(({ title, description, icon: Icon }, index) => (
              <article key={title} className={index > 0 ? 'lg:border-l lg:border-slate-200 lg:pl-9' : ''}>
                <Icon className="h-9 w-9 text-[#a1ba00]" strokeWidth={1.7} aria-hidden="true" />
                <h2 className="mt-4 text-lg font-extrabold text-ink">{title}</h2>
                <p className="mt-2 text-sm leading-6 text-slate-600">{description}</p>
              </article>
            ))}
          </div>
        </section>

        <section className="bg-soft py-20 sm:py-24 lg:py-28" aria-labelledby="experience-title">
          <div className="site-container">
            <p className="eyebrow">Naša firma</p>
            <h2 id="experience-title" className="section-title mt-3 max-w-3xl text-ink">Skúsenosti, ktoré prinášajú hodnotu</h2>
            <div className="mt-10 grid gap-10 lg:grid-cols-[0.82fr_1.18fr] lg:items-stretch">
              <div className="flex flex-col justify-center">
                <p className="text-lg leading-8 text-slate-700">
                  Viac ako 10 rokov sa venujeme projektovaniu a realizácii LED osvetlenia a prevádzke fotovoltických elektrární. Návrh vždy prispôsobujeme technickým podmienkam a potrebám zákazníka.
                </p>
                <p className="mt-5 text-base leading-7 text-slate-600">
                  AXIS koordinuje celý projekt a spolupracuje s overenými výrobcami, technologickými partnermi a subdodávateľmi podľa rozsahu konkrétnej realizácie. Klient tak získava jeden zodpovedný kontakt pre návrh, dodávku, realizáciu aj servis.
                </p>
              </div>

              <div className="relative min-h-[440px] overflow-hidden bg-navy p-7 text-white sm:p-10 lg:p-12">
                <img
                  src={assetUrl('images/industrial-led-lighting.webp')}
                  alt="LED osvetlenie vo výrobnej hale realizované spoločnosťou AXIS"
                  width="1170"
                  height="420"
                  loading="lazy"
                  className="absolute inset-0 h-full w-full object-cover opacity-30"
                />
                <div className="absolute inset-0 bg-gradient-to-r from-navy via-navy/90 to-navy/55" aria-hidden="true" />
                <div className="relative">
                  <h3 className="text-2xl font-extrabold tracking-[-0.03em] sm:text-3xl">Prečo si vybrať AXIS?</h3>
                  <ul className="mt-7 space-y-5">
                    {[
                      'Viac ako 10 rokov skúseností',
                      'Viac ako 300 realizovaných LED projektov',
                      'Technický návrh riešenia na mieru',
                      'Koordinácia realizácie a uvedenia do prevádzky',
                      'Záručný aj pozáručný servis',
                    ].map((item) => (
                      <li key={item} className="flex items-start gap-3 text-[15px] leading-6 text-white/85">
                        <span className="mt-1 flex h-5 w-5 shrink-0 items-center justify-center bg-lime text-ink">✓</span>
                        {item}
                      </li>
                    ))}
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="ako-pracujeme" className="scroll-mt-24 bg-white py-20 sm:py-24 lg:py-28" aria-labelledby="approach-title">
          <div className="site-container">
            <div className="grid gap-6 lg:grid-cols-[0.65fr_1.35fr] lg:items-end">
              <div>
                <p className="eyebrow">Náš prístup</p>
                <h2 id="approach-title" className="section-title mt-3 text-ink">Ako pracujeme</h2>
              </div>
              <p className="max-w-3xl text-base leading-7 text-slate-600 lg:justify-self-end">
                Projekty realizujeme v spolupráci s overenými technologickými partnermi a subdodávateľmi. AXIS koordinuje jednotlivé kroky, kontroluje kvalitu a zostáva partnerom klienta aj po uvedení riešenia do prevádzky.
              </p>
            </div>

            <ol className="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
              {approach.map(({ number, title, description, icon: Icon }) => (
                <li key={number} className="relative border border-slate-200 bg-white p-5 pt-9 shadow-card">
                  <span className="absolute -top-4 left-5 flex h-8 min-w-8 items-center justify-center rounded-full bg-lime px-2 text-xs font-extrabold text-ink">{number}</span>
                  <Icon className="h-9 w-9 text-[#91a900]" strokeWidth={1.6} aria-hidden="true" />
                  <h3 className="mt-5 text-base font-extrabold leading-6 text-ink">{title}</h3>
                  <p className="mt-3 text-sm leading-6 text-slate-600">{description}</p>
                </li>
              ))}
            </ol>
          </div>
        </section>

        <StatsStrip items={stats} label="Skúsenosti a rozsah služieb AXIS" inverse />
        <ConsultationCta title="Hľadáte partnera pre energetický projekt?" description="Prejdeme s vami technické možnosti a navrhneme ďalší postup." />
      </main>
    </>
  )
}
