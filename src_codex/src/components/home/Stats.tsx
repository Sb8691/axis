import { CalendarCheck, Gauge, UsersRound, Wrench } from 'lucide-react'

const stats = [
  { value: '10+', label: 'rokov skúseností', icon: CalendarCheck },
  { value: '300+', label: 'LED projektov', icon: UsersRound },
  { value: 'FVE do 1 MW', label: 'realizované projekty', icon: Gauge },
  { value: 'Kompletný servis', label: 'od návrhu po prevádzku', icon: Wrench },
]

export function Stats() {
  return (
    <section className="border-y border-slate-200 bg-white" aria-label="AXIS v číslach">
      <div className="site-container grid grid-cols-2 py-2 lg:grid-cols-4 lg:py-0">
        {stats.map(({ value, label, icon: Icon }, index) => (
          <div
            key={value}
            className={`flex min-h-[142px] items-start gap-3 py-7 sm:items-center sm:gap-4 ${
              index % 2 === 0 ? 'border-r border-slate-200 pr-4 sm:pr-6' : 'pl-4 sm:pl-6'
            } ${index > 1 ? 'border-t border-slate-200 lg:border-t-0' : ''} ${
              index > 0 ? 'lg:border-l lg:border-r-0 lg:pl-7 lg:pr-4 xl:pl-9' : 'lg:pr-4'
            }`}
          >
            <span className="flex h-11 w-11 shrink-0 items-center justify-center bg-lime/10 text-[#91a900] sm:h-12 sm:w-12">
              <Icon className="h-6 w-6" strokeWidth={1.8} aria-hidden="true" />
            </span>
            <span>
              <strong className="block text-lg font-extrabold leading-tight tracking-[-0.02em] text-ink sm:text-xl">{value}</strong>
              <span className="mt-1 block text-xs leading-5 text-slate-500 sm:text-sm">{label}</span>
            </span>
          </div>
        ))}
      </div>
    </section>
  )
}
