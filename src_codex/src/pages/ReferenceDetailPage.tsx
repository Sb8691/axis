import { ArrowLeft } from 'lucide-react'
import { Link, useParams } from 'react-router-dom'
import { ConsultationCta } from '../components/layout/ConsultationCta'
import { PageHero } from '../components/layout/PageHero'
import { ReferenceCard } from '../components/references/ReferenceCard'
import { Seo } from '../components/Seo'
import { references } from '../data/references'
import { NotFoundPage } from './NotFoundPage'

export function ReferenceDetailPage() {
  const { slug } = useParams()
  const project = references.find((item) => item.slug === slug)

  if (!project) return <NotFoundPage />

  const related = references.filter((item) => item.slug !== project.slug && item.category === project.category).slice(0, 3)

  return (
    <>
      <Seo title={`${project.title} | Referencie AXIS`} description={project.description} path={project.href} />
      <main id="main-content">
        <PageHero
          title={project.title}
          breadcrumb="Referencie"
          description={project.description}
          image={project.image}
          imageAlt={project.imageAlt}
          imageWidth={project.imageWidth}
          imageHeight={project.imageHeight}
        />

        <section className="bg-white py-20 sm:py-24" aria-labelledby="project-results-title">
          <div className="site-container grid gap-12 lg:grid-cols-[0.75fr_1.25fr] lg:items-start">
            <div>
              <p className="eyebrow">{project.category}</p>
              <h2 id="project-results-title" className="section-title mt-3 text-ink">Overené výsledky projektu</h2>
              <p className="mt-5 text-base leading-7 text-slate-600">{project.description}</p>
            </div>
            <dl className="grid gap-px overflow-hidden bg-slate-200 sm:grid-cols-2">
              {project.metrics.map((metric) => (
                <div key={metric.label} className="bg-soft p-7 sm:p-8">
                  <dt className="mt-2 text-sm text-slate-500">{metric.label}</dt>
                  <dd className="text-3xl font-extrabold tracking-[-0.035em] text-ink sm:text-4xl">{metric.value}</dd>
                </div>
              ))}
            </dl>
          </div>
        </section>

        {related.length > 0 ? (
          <section className="bg-soft py-20 sm:py-24" aria-labelledby="related-projects-title">
            <div className="site-container">
              <div className="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                <div>
                  <p className="eyebrow">Ďalšie projekty</p>
                  <h2 id="related-projects-title" className="mt-3 text-3xl font-extrabold tracking-[-0.035em] text-ink sm:text-4xl">Súvisiace realizácie</h2>
                </div>
                <Link to="/referencie" className="inline-flex min-h-11 items-center gap-2 text-xs font-extrabold uppercase tracking-[0.12em] text-[#829900] hover:text-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime">
                  <ArrowLeft className="h-4 w-4" aria-hidden="true" />
                  Všetky referencie
                </Link>
              </div>
              <div className="mt-10 grid gap-7 md:grid-cols-2 xl:grid-cols-3">
                {related.map((item) => <ReferenceCard key={item.slug} project={item} />)}
              </div>
            </div>
          </section>
        ) : null}

        <ConsultationCta title="Máte podobný projekt?" />
      </main>
    </>
  )
}
