import {
  BadgeCheck,
  ChartNoAxesCombined,
  Check,
  ClipboardList,
  Handshake,
  HardHat,
  Layers3,
  Search,
  ShieldCheck,
  Wrench,
} from 'lucide-react'
import { ArrowLink } from '../components/ArrowLink'
import { ProcessTimeline } from '../components/common/ProcessTimeline'
import { ConsultationCta } from '../components/layout/ConsultationCta'
import { PageHero } from '../components/layout/PageHero'
import { Seo } from '../components/Seo'
import { solutions } from '../data/solutions'
import { assetUrl } from '../lib/assets'

const processSteps = [
  { number: '01', title: 'Analýza', description: 'Analyzujeme spotrebu, prevádzku a možnosti úspor.', icon: Search },
  { number: '02', title: 'Návrh riešenia', description: 'Pripravíme technické riešenie a ekonomiku projektu.', icon: ClipboardList },
  { number: '03', title: 'Realizácia', description: 'Zabezpečíme dodávku, koordináciu montáže a pripojenie.', icon: HardHat },
  { number: '04', title: 'Uvedenie do prevádzky', description: 'Systém nastavíme, otestujeme a odovzdáme.', icon: BadgeCheck },
  { number: '05', title: 'Servis a optimalizácia', description: 'Poskytujeme monitoring, servis a technickú podporu.', icon: ChartNoAxesCombined },
]

const reasons = [
  { title: 'Skúsenosti', description: 'Viac ako 10 rokov skúseností s energetickými a svetelnými projektmi.', icon: ShieldCheck },
  { title: 'Odbornosť', description: 'Návrh vychádza z technickej analýzy a potrieb konkrétnej prevádzky.', icon: Wrench },
  { title: 'Komplexnosť', description: 'Koordinujeme riešenie od prvého návrhu až po servis.', icon: Layers3 },
  { title: 'Dôvera', description: 'Staviame na zodpovednosti, kvalite a dlhodobej spolupráci.', icon: Handshake },
]

export function SolutionsPage() {
  return (
    <>
      <Seo
        title="Riešenia | AXIS Energy Solutions"
        description="Fotovoltické elektrárne, batériové systémy, energetické riadenie a LED osvetlenie pre firemné a priemyselné prevádzky."
        path="/riesenia"
      />
      <main id="main-content">
        <PageHero
          title="Naše riešenia"
          breadcrumb="Riešenia"
          description="Navrhujeme a realizujeme energetické riešenia na mieru pre komerčné a priemyselné prevádzky – od fotovoltiky a batériových úložísk po riadenie spotreby a LED osvetlenie."
          image={assetUrl('images/axis-industrial-solar.webp')}
          imageAlt="Fotovoltická elektráreň na streche priemyselného objektu"
          showCta
        />

        <section className="bg-soft py-20 sm:py-24 lg:py-28" aria-labelledby="solution-areas-title">
          <div className="site-container">
            <div className="mx-auto max-w-3xl text-center">
              <p className="eyebrow">Naše oblasti</p>
              <h2 id="solution-areas-title" className="section-title mt-3 text-ink">Komplexné riešenia pre efektívnu prevádzku</h2>
            </div>

            <div className="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
              {solutions.map(({ title, description, benefits, href, icon: Icon }) => (
                <article key={title} className="flex flex-col border border-slate-200 bg-white p-6 shadow-card sm:p-7">
                  <span className="flex h-16 w-16 items-center justify-center bg-[#eef4fb] text-[#145eb4]">
                    <Icon className="h-8 w-8" strokeWidth={1.6} aria-hidden="true" />
                  </span>
                  <h3 className="mt-7 text-xl font-extrabold tracking-[-0.025em] text-ink">{title}</h3>
                  <p className="mt-3 text-[15px] leading-6 text-slate-600">{description}</p>
                  <ul className="mt-6 space-y-2.5">
                    {benefits.map((benefit) => (
                      <li key={benefit} className="flex items-start gap-2.5 text-sm leading-5 text-slate-600">
                        <Check className="mt-0.5 h-4 w-4 shrink-0 text-[#91a900]" strokeWidth={2.5} aria-hidden="true" />
                        {benefit}
                      </li>
                    ))}
                  </ul>
                  <ArrowLink href={href} className="mt-auto pt-7">Zistiť viac</ArrowLink>
                </article>
              ))}
            </div>
          </div>
        </section>

        <section className="bg-navy py-20 text-white sm:py-24 lg:py-28" aria-labelledby="solutions-process-title">
          <div className="site-container">
            <div className="mx-auto max-w-3xl text-center">
              <p className="eyebrow">Náš prístup</p>
              <h2 id="solutions-process-title" className="section-title mt-3 text-white">Od analýzy po dlhodobú spoluprácu</h2>
            </div>
            <ProcessTimeline steps={processSteps} inverse />
          </div>
        </section>

        <section className="bg-white py-20 sm:py-24" aria-labelledby="why-axis-title">
          <div className="site-container">
            <div className="mx-auto max-w-3xl text-center">
              <p className="eyebrow">Prečo AXIS</p>
              <h2 id="why-axis-title" className="section-title mt-3 text-ink">Spoľahlivý partner pre vašu energiu</h2>
            </div>
            <div className="mt-12 grid gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-4">
              {reasons.map(({ title, description, icon: Icon }, index) => (
                <article key={title} className={`relative ${index > 0 ? 'lg:border-l lg:border-slate-200 lg:pl-8' : ''}`}>
                  <Icon className="h-9 w-9 text-[#145eb4]" strokeWidth={1.7} aria-hidden="true" />
                  <h3 className="mt-4 text-lg font-extrabold text-ink">{title}</h3>
                  <p className="mt-2 text-sm leading-6 text-slate-600">{description}</p>
                </article>
              ))}
            </div>
          </div>
        </section>

        <ConsultationCta />
      </main>
    </>
  )
}
