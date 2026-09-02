import { ArrowLeft, Check, ClipboardCheck, Cog, Search, Wrench } from 'lucide-react'
import { Link, useParams } from 'react-router-dom'
import { ProcessTimeline } from '../components/common/ProcessTimeline'
import { ConsultationCta } from '../components/layout/ConsultationCta'
import { PageHero } from '../components/layout/PageHero'
import { Seo } from '../components/Seo'
import { solutions } from '../data/solutions'
import { NotFoundPage } from './NotFoundPage'

const detailSteps = [
  { number: '01', title: 'Konzultácia', description: 'Prejdeme ciele, prevádzku a vstupné údaje.', icon: Search },
  { number: '02', title: 'Technický návrh', description: 'Pripravíme vhodné riešenie a rozsah projektu.', icon: ClipboardCheck },
  { number: '03', title: 'Realizácia', description: 'Skoordinujeme dodávku, montáž a uvedenie do prevádzky.', icon: Cog },
  { number: '04', title: 'Servis', description: 'Zabezpečíme dohľad, údržbu a technickú podporu.', icon: Wrench },
]

export function SolutionDetailPage() {
  const { slug } = useParams()
  const solution = solutions.find((item) => item.slug === slug)

  if (!solution) return <NotFoundPage />

  return (
    <>
      <Seo
        title={`${solution.title} | AXIS Energy Solutions`}
        description={solution.detailDescription}
        path={solution.href}
      />
      <main id="main-content">
        <PageHero
          title={solution.title}
          breadcrumb={solution.shortTitle}
          description={solution.detailDescription}
          image={solution.image}
          imageAlt={solution.imageAlt}
          imageWidth={solution.imageWidth}
          imageHeight={solution.imageHeight}
          showCta
        />

        <section className="bg-soft py-20 sm:py-24" aria-labelledby="detail-capabilities-title">
          <div className="site-container grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">
            <div>
              <p className="eyebrow">Rozsah riešenia</p>
              <h2 id="detail-capabilities-title" className="section-title mt-3 text-ink">Od návrhu po spoľahlivú prevádzku</h2>
              <p className="mt-5 text-base leading-7 text-slate-600">Každý návrh prispôsobujeme technickým možnostiam objektu, spotrebe a cieľom prevádzky.</p>
            </div>
            <ul className="grid gap-4 sm:grid-cols-2">
              {solution.benefits.map((benefit) => (
                <li key={benefit} className="flex min-h-24 items-start gap-4 border border-slate-200 bg-white p-5 text-base font-bold leading-6 text-ink">
                  <span className="flex h-9 w-9 shrink-0 items-center justify-center bg-lime/15 text-[#829900]">
                    <Check className="h-5 w-5" aria-hidden="true" />
                  </span>
                  <span className="pt-1.5">{benefit}</span>
                </li>
              ))}
            </ul>
          </div>
        </section>

        <section className="bg-white py-20 sm:py-24" aria-labelledby="detail-process-title">
          <div className="site-container">
            <div className="mx-auto max-w-3xl text-center">
              <p className="eyebrow">Ako postupujeme</p>
              <h2 id="detail-process-title" className="section-title mt-3 text-ink">Jasný proces, jedno koordinované riešenie</h2>
            </div>
            <ProcessTimeline steps={detailSteps} />
            <Link to="/riesenia" className="mt-12 inline-flex min-h-11 items-center gap-2 text-xs font-extrabold uppercase tracking-[0.12em] text-[#829900] hover:text-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime">
              <ArrowLeft className="h-4 w-4" aria-hidden="true" />
              Všetky riešenia
            </Link>
          </div>
        </section>

        <ConsultationCta title="Hľadáte riešenie pre svoju prevádzku?" />
      </main>
    </>
  )
}
