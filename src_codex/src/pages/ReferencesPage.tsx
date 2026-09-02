import { ArrowRight, CalendarCheck, Gauge, UsersRound, Wrench } from 'lucide-react'
import { useState } from 'react'
import { Link } from 'react-router-dom'
import { StatsStrip } from '../components/common/StatsStrip'
import { ConsultationCta } from '../components/layout/ConsultationCta'
import { PageHero } from '../components/layout/PageHero'
import { ReferenceCard } from '../components/references/ReferenceCard'
import { Seo } from '../components/Seo'
import {
  featuredReference,
  referenceGridItems,
  type ReferenceCategory,
} from '../data/references'
import { assetUrl } from '../lib/assets'

type ActiveFilter = 'Všetky' | ReferenceCategory

const filters: ActiveFilter[] = ['Všetky', 'Fotovoltika', 'LED osvetlenie']

const stats = [
  { value: '10+', label: 'rokov skúseností', icon: CalendarCheck },
  { value: '300+', label: 'LED projektov', icon: UsersRound },
  { value: 'FVE do 1 MW', label: 'realizované projekty', icon: Gauge },
  { value: 'Kompletný servis', label: 'od návrhu po prevádzku', icon: Wrench },
]

export function ReferencesPage() {
  const [activeFilter, setActiveFilter] = useState<ActiveFilter>('Všetky')
  const visibleReferences = activeFilter === 'Všetky'
    ? referenceGridItems
    : referenceGridItems.filter((project) => project.category === activeFilter)
  const showFeatured = activeFilter === 'Všetky' || featuredReference.category === activeFilter

  return (
    <>
      <Seo
        title="Referencie | AXIS Energy Solutions"
        description="Skutočné realizácie AXIS v oblasti fotovoltiky a LED osvetlenia s overenými technickými a ekonomickými výsledkami."
        path="/referencie"
      />
      <main id="main-content">
        <PageHero
          title="Referencie"
          breadcrumb="Referencie"
          description="Skutočné projekty. Reálne úspory. Overené výsledky. Pozrite si výber realizácií fotovoltických elektrární a LED osvetlenia."
          image={assetUrl('images/axis-industrial-solar.webp')}
          imageAlt="Priemyselná strešná fotovoltická elektráreň realizovaná spoločnosťou AXIS"
        />

        <section className="bg-soft py-20 sm:py-24 lg:py-28" aria-labelledby="reference-list-title">
          <div className="site-container">
            <div className="mx-auto max-w-3xl text-center">
              <p className="eyebrow">Naše realizácie</p>
              <h2 id="reference-list-title" className="section-title mt-3 text-ink">Skutočné projekty, reálne výsledky</h2>
            </div>

            <div className="mt-9 flex max-w-full gap-2 overflow-x-auto pb-2 sm:flex-wrap sm:justify-center sm:overflow-visible" role="group" aria-label="Filtrovať referencie podľa kategórie">
              {filters.map((filter) => (
                <button
                  key={filter}
                  type="button"
                  aria-pressed={activeFilter === filter}
                  onClick={() => setActiveFilter(filter)}
                  className={`min-h-11 shrink-0 border px-5 py-2.5 text-[11px] font-extrabold uppercase tracking-[0.1em] transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime ${
                    activeFilter === filter
                      ? 'border-lime bg-lime text-ink'
                      : 'border-slate-300 bg-white text-ink hover:border-ink'
                  }`}
                >
                  {filter}
                </button>
              ))}
            </div>

            <div className="mt-10 grid gap-7 md:grid-cols-2 xl:grid-cols-3">
              {visibleReferences.map((project) => (
                <ReferenceCard key={project.slug} project={project} />
              ))}
            </div>

            {showFeatured ? (
              <article className="mt-10 overflow-hidden bg-navy text-white shadow-card lg:grid lg:grid-cols-[1.05fr_0.95fr]" aria-labelledby="featured-reference-title">
                <div className="min-h-[300px] sm:min-h-[400px] lg:min-h-[430px]">
                  <img
                    src={featuredReference.image}
                    alt={featuredReference.imageAlt}
                    width={featuredReference.imageWidth}
                    height={featuredReference.imageHeight}
                    loading="lazy"
                    className="h-full w-full object-cover"
                  />
                </div>
                <div className="flex flex-col justify-center p-7 sm:p-10 lg:p-12">
                  <p className="eyebrow">Vybraná realizácia</p>
                  <h3 id="featured-reference-title" className="mt-3 text-2xl font-extrabold tracking-[-0.03em] sm:text-3xl">{featuredReference.title}</h3>
                  <p className="mt-4 text-base leading-7 text-white/70">{featuredReference.description}</p>
                  <dl className="mt-8 grid gap-5 border-y border-white/15 py-7 sm:grid-cols-3">
                    {featuredReference.metrics.map((metric) => (
                      <div key={metric.label}>
                        <dt className="mt-1 text-xs leading-5 text-white/55">{metric.label}</dt>
                        <dd className="text-xl font-extrabold tracking-[-0.02em] text-lime">{metric.value}</dd>
                      </div>
                    ))}
                  </dl>
                  <Link to={featuredReference.href} className="group mt-6 inline-flex min-h-11 items-center gap-2 self-start text-xs font-extrabold uppercase tracking-[0.12em] text-lime transition-colors hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime">
                    Pozrieť projekt
                    <ArrowRight className="h-4 w-4 transition-transform group-hover:translate-x-1" aria-hidden="true" />
                  </Link>
                </div>
              </article>
            ) : null}

            {visibleReferences.length === 0 && !showFeatured ? (
              <p className="mt-10 text-center text-slate-600">V tejto kategórii momentálne nie sú zobrazené žiadne referencie.</p>
            ) : null}
          </div>
        </section>

        <StatsStrip items={stats} label="Overené skúsenosti AXIS" inverse />
        <ConsultationCta title="Máte podobný projekt?" description="Radi s vami prejdeme zadanie a pripravíme technický návrh riešenia na mieru." />
      </main>
    </>
  )
}
