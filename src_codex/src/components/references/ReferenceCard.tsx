import { ArrowLink } from '../ArrowLink'
import type { ProjectReference } from '../../data/references'

type ReferenceCardProps = {
  project: ProjectReference
}

export function ReferenceCard({ project }: ReferenceCardProps) {
  return (
    <article className="group flex h-full flex-col overflow-hidden border border-slate-200 bg-white shadow-card">
      <div className="aspect-[16/9] overflow-hidden bg-slate-100">
        <img
          src={project.image}
          alt={project.imageAlt}
          width={project.imageWidth}
          height={project.imageHeight}
          loading="lazy"
          className="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.025]"
        />
      </div>
      <div className="flex flex-1 flex-col p-6 sm:p-7">
        <p className="text-[10px] font-extrabold uppercase tracking-[0.16em] text-[#91a900]">{project.category}</p>
        <h3 className="mt-2 text-xl font-extrabold tracking-[-0.02em] text-ink">{project.title}</h3>
        <dl className="mt-6 grid grid-cols-2 gap-4 border-y border-slate-200 py-5">
          {project.metrics.slice(0, 2).map((metric) => (
            <div key={metric.label} className="flex min-w-0 flex-col-reverse">
              <dt className="text-xs leading-5 text-slate-500">{metric.label}</dt>
              <dd className="mb-1 break-words text-[1.15rem] font-extrabold leading-tight tracking-[-0.025em] text-ink sm:text-[1.3rem]">{metric.value}</dd>
            </div>
          ))}
        </dl>
        <ArrowLink href={project.href} className="mt-auto pt-4">Pozrieť projekt</ArrowLink>
      </div>
    </article>
  )
}
