import { BarChart3, ClipboardList, HardHat, Search } from 'lucide-react'

const steps = [
  {
    number: '01',
    title: 'Analýza',
    description: 'Analyzujeme vašu spotrebu, prevádzku a možnosti úspor.',
    icon: Search,
  },
  {
    number: '02',
    title: 'Návrh',
    description: 'Navrhneme technické riešenie a ekonomiku projektu.',
    icon: ClipboardList,
  },
  {
    number: '03',
    title: 'Realizácia',
    description: 'Zabezpečíme projekt, montáž a pripojenie.',
    icon: HardHat,
  },
  {
    number: '04',
    title: 'Prevádzka',
    description: 'Monitoring, servis a neustála optimalizácia.',
    icon: BarChart3,
  },
]

export function Process() {
  return (
    <section id="ako-pracujeme" className="scroll-mt-20 bg-white py-20 sm:py-24 lg:py-28" aria-labelledby="process-title">
      <div className="site-container">
        <div className="mx-auto max-w-3xl text-center">
          <p className="eyebrow">Ako pracujeme</p>
          <h2 id="process-title" className="section-title mt-3 text-ink">Od analýzy po dlhodobú prevádzku</h2>
        </div>

        <ol className="process-list relative mx-auto mt-12 max-w-2xl lg:grid lg:max-w-none lg:grid-cols-4 lg:gap-7 xl:gap-10">
          {steps.map(({ number, title, description, icon: Icon }) => (
            <li key={number} className="relative grid grid-cols-[56px_1fr] gap-5 pb-11 last:pb-0 lg:block lg:pb-0">
              <span className="relative z-10 flex h-14 w-14 items-center justify-center border border-lime/50 bg-white text-[#91a900] lg:h-16 lg:w-16">
                <Icon className="h-7 w-7" strokeWidth={1.6} aria-hidden="true" />
              </span>
              <div className="pt-0.5 lg:mt-6 lg:pt-0">
                <div className="flex items-center gap-3">
                  <span className="text-lg font-extrabold text-[#9bb400]">{number}</span>
                  <h3 className="text-lg font-extrabold text-ink">{title}</h3>
                </div>
                <p className="mt-3 max-w-[260px] text-[15px] leading-6 text-slate-600">{description}</p>
              </div>
            </li>
          ))}
        </ol>
      </div>
    </section>
  )
}
