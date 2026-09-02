import { ArrowRight } from 'lucide-react'
import { ArrowLink } from '../ArrowLink'
import { SectionIntro } from '../SectionIntro'
import { references } from '../../data/references'

export function References() {
  return (
    <section id="referencie" className="scroll-mt-20 bg-navy py-20 text-white sm:py-24 lg:py-28" aria-labelledby="references-title">
      <div className="site-container">
        <div className="flex flex-col gap-7 sm:flex-row sm:items-end sm:justify-between">
          <SectionIntro id="references-title" eyebrow="Referencie" title="Skutočné projekty, reálne výsledky" align="left" inverse />
          <a href="/referencie" className="button-outline-light hidden sm:inline-flex">
            Všetky referencie
            <ArrowRight className="h-4 w-4" aria-hidden="true" />
          </a>
        </div>

        <div className="mt-11 grid gap-7 lg:grid-cols-3 lg:gap-6 xl:gap-8">
          {references.map((project) => (
            <article key={project.title} className="group flex flex-col overflow-hidden bg-white text-ink shadow-card">
              <div className="aspect-[16/9] overflow-hidden bg-slate-800">
                <img
                  src={project.image}
                  alt={project.imageAlt}
                  width="1170"
                  height="658"
                  loading="lazy"
                  className="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.025]"
                />
              </div>
              <div className="flex flex-1 flex-col p-6 sm:p-7">
                <p className="text-[10px] font-extrabold uppercase tracking-[0.16em] text-[#91a900]">{project.category}</p>
                <h3 className="mt-2 text-xl font-extrabold tracking-[-0.02em]">{project.title}</h3>
                <dl className="mt-6 grid grid-cols-2 gap-4 border-y border-slate-200 py-5">
                  {project.metrics.map((metric) => (
                    <div key={metric.label} className="flex flex-col-reverse">
                      <dt className="text-xs leading-5 text-slate-500">{metric.label}</dt>
                      <dd className="mb-1 text-[1.2rem] font-extrabold tracking-[-0.02em] text-ink sm:text-[1.3rem]">{metric.value}</dd>
                    </div>
                  ))}
                </dl>
                <ArrowLink href={project.href} className="mt-4">Pozrieť projekt</ArrowLink>
              </div>
            </article>
          ))}
        </div>

        <div className="mt-9 sm:hidden">
          <a href="/referencie" className="button-outline-light w-full">
            Všetky referencie
            <ArrowRight className="h-4 w-4" aria-hidden="true" />
          </a>
        </div>
      </div>
    </section>
  )
}
