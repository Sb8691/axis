import type { LucideIcon } from 'lucide-react'

export type ProcessStep = {
  number: string
  title: string
  description: string
  icon: LucideIcon
}

type ProcessTimelineProps = {
  steps: ProcessStep[]
  inverse?: boolean
}

export function ProcessTimeline({ steps, inverse = false }: ProcessTimelineProps) {
  return (
    <ol className={`process-list relative mx-auto mt-12 max-w-2xl lg:grid lg:max-w-none lg:gap-7 xl:gap-9 ${steps.length === 5 ? 'lg:grid-cols-5' : 'lg:grid-cols-4'} ${inverse ? 'process-list-inverse' : ''}`}>
      {steps.map(({ number, title, description, icon: Icon }) => (
        <li key={number} className="relative grid grid-cols-[56px_1fr] gap-5 pb-11 last:pb-0 lg:block lg:pb-0">
          <span className={`relative z-10 flex h-14 w-14 items-center justify-center border lg:h-16 lg:w-16 ${inverse ? 'border-lime/60 bg-navy text-lime' : 'border-lime/50 bg-white text-[#91a900]'}`}>
            <Icon className="h-7 w-7" strokeWidth={1.6} aria-hidden="true" />
          </span>
          <div className="pt-0.5 lg:mt-6 lg:pt-0">
            <div className="flex items-center gap-3 lg:block">
              <span className="text-lg font-extrabold text-[#9bb400]">{number}</span>
              <h3 className={`text-lg font-extrabold ${inverse ? 'lg:mt-1 text-white' : 'text-ink'}`}>{title}</h3>
            </div>
            <p className={`mt-3 max-w-[260px] text-[15px] leading-6 ${inverse ? 'text-white/65' : 'text-slate-600'}`}>{description}</p>
          </div>
        </li>
      ))}
    </ol>
  )
}
