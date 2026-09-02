import { BarChart3, ClipboardList, HardHat, Search } from 'lucide-react'
import { ProcessTimeline } from '../common/ProcessTimeline'

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
        <ProcessTimeline steps={steps} />
      </div>
    </section>
  )
}
