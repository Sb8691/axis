import type { LucideIcon } from 'lucide-react'

export type StatItem = {
  value: string
  label: string
  icon: LucideIcon
}

type StatsStripProps = {
  items: StatItem[]
  label: string
  inverse?: boolean
}

export function StatsStrip({ items, label, inverse = false }: StatsStripProps) {
  return (
    <section className={inverse ? 'bg-navy text-white' : 'border-y border-slate-200 bg-white'} aria-label={label}>
      <div className="site-container grid grid-cols-2 py-2 lg:grid-cols-4 lg:py-0">
        {items.map(({ value, label: itemLabel, icon: Icon }, index) => (
          <div
            key={`${value}-${itemLabel}`}
            className={`flex min-h-[132px] items-start gap-3 py-7 sm:items-center sm:gap-4 ${
              index % 2 === 0 ? `border-r pr-4 sm:pr-6 ${inverse ? 'border-white/15' : 'border-slate-200'}` : 'pl-4 sm:pl-6'
            } ${index > 1 ? `border-t ${inverse ? 'border-white/15' : 'border-slate-200'} lg:border-t-0` : ''} ${
              index > 0 ? `lg:border-l lg:border-r-0 lg:pl-7 lg:pr-4 xl:pl-9 ${inverse ? 'lg:border-white/15' : 'lg:border-slate-200'}` : 'lg:pr-4'
            }`}
          >
            <span className={`flex h-11 w-11 shrink-0 items-center justify-center sm:h-12 sm:w-12 ${inverse ? 'text-lime' : 'bg-lime/10 text-[#91a900]'}`}>
              <Icon className="h-6 w-6" strokeWidth={1.8} aria-hidden="true" />
            </span>
            <span>
              <strong className={`block text-lg font-extrabold leading-tight tracking-[-0.02em] sm:text-xl ${inverse ? 'text-white' : 'text-ink'}`}>{value}</strong>
              <span className={`mt-1 block text-xs leading-5 sm:text-sm ${inverse ? 'text-white/60' : 'text-slate-500'}`}>{itemLabel}</span>
            </span>
          </div>
        ))}
      </div>
    </section>
  )
}
