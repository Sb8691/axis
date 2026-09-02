import { Check } from 'lucide-react'
import { ArrowLink } from '../ArrowLink'
import { SectionIntro } from '../SectionIntro'
import { homeSolutions } from '../../data/solutions'

export function Solutions() {
  return (
    <section id="riesenia" className="scroll-mt-20 bg-soft py-20 sm:py-24 lg:py-28" aria-labelledby="solutions-title">
      <div className="site-container">
        <SectionIntro id="solutions-title" eyebrow="Naše riešenia" title="Komplexná starostlivosť o vašu energiu" />
        <div className="mt-12 grid gap-7 lg:mt-14 lg:grid-cols-3 lg:gap-6 xl:gap-8">
          {homeSolutions.map(({ title, description, image, imageAlt, imageWidth, imageHeight, icon: Icon, benefits, href, imageClassName }) => (
            <article key={title} className="group flex flex-col overflow-hidden border border-slate-200 bg-white shadow-card transition-transform duration-300 hover:-translate-y-1">
              <div className="relative aspect-[16/9] overflow-hidden bg-slate-100">
                <img
                  src={image}
                  alt={imageAlt}
                  width={imageWidth}
                  height={imageHeight}
                  loading="lazy"
                  className={`h-full w-full transition-transform duration-500 group-hover:scale-[1.025] ${imageClassName ?? 'object-cover'}`}
                />
              </div>
              <div className="relative flex flex-1 flex-col px-6 pb-7 pt-10 sm:px-7">
                <span className="absolute -top-7 left-6 flex h-14 w-14 items-center justify-center bg-lime text-ink sm:left-7">
                  <Icon className="h-7 w-7" strokeWidth={1.7} aria-hidden="true" />
                </span>
                <h3 className="text-[1.35rem] font-extrabold tracking-[-0.025em] text-ink">{title}</h3>
                <p className="mt-3 text-[15px] leading-6 text-slate-600">{description}</p>
                <ul className="mt-6 space-y-2.5">
                  {benefits.map((benefit) => (
                    <li key={benefit} className="flex items-start gap-2.5 text-sm leading-5 text-slate-600">
                      <Check className="mt-0.5 h-4 w-4 shrink-0 text-[#9bb400]" strokeWidth={2.5} aria-hidden="true" />
                      {benefit}
                    </li>
                  ))}
                </ul>
                <ArrowLink href={href} className="mt-auto pt-6">Zistiť viac</ArrowLink>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  )
}
