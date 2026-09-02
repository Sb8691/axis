import { FinalCta } from '../components/home/FinalCta'
import { Hero } from '../components/home/Hero'
import { Process } from '../components/home/Process'
import { References } from '../components/home/References'
import { Solutions } from '../components/home/Solutions'
import { Stats } from '../components/home/Stats'
import { Footer } from '../components/layout/Footer'
import { Header } from '../components/layout/Header'

export function HomePage() {
  return (
    <>
      <Header />
      <main>
        <Hero />
        <Stats />
        <Solutions />
        <References />
        <Process />
        <FinalCta />
      </main>
      <Footer />
    </>
  )
}
