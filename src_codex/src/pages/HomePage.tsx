import { FinalCta } from '../components/home/FinalCta'
import { Hero } from '../components/home/Hero'
import { Process } from '../components/home/Process'
import { References } from '../components/home/References'
import { Solutions } from '../components/home/Solutions'
import { Stats } from '../components/home/Stats'
import { Seo } from '../components/Seo'

export function HomePage() {
  return (
    <>
      <Seo
        title="AXIS Energy Solutions | Energetické riešenia pre firmy"
        description="Fotovoltické elektrárne, inteligentné energetické riešenia a LED osvetlenie pre firmy. Od analýzy a návrhu až po realizáciu, monitoring a servis."
        path="/"
      />
      <main id="main-content">
        <Hero />
        <Stats />
        <Solutions />
        <References />
        <Process />
        <FinalCta />
      </main>
    </>
  )
}
