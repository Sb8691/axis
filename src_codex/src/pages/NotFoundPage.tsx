import { ArrowLeft } from 'lucide-react'
import { Link } from 'react-router-dom'
import { Seo } from '../components/Seo'

export function NotFoundPage() {
  return (
    <main id="main-content" className="flex min-h-[62vh] items-center bg-soft py-20">
      <Seo title="Stránka sa nenašla | AXIS Energy Solutions" description="Požadovaná stránka sa nenašla." path="/404" />
      <div className="site-container text-center">
        <p className="eyebrow">404</p>
        <h1 className="mt-3 text-4xl font-extrabold tracking-[-0.04em] text-ink sm:text-6xl">Stránka sa nenašla</h1>
        <p className="mx-auto mt-5 max-w-xl text-lg leading-8 text-slate-600">Adresa stránky nie je platná alebo sa jej obsah presunul.</p>
        <Link to="/" className="button-primary mt-8">
          <ArrowLeft className="h-4 w-4" aria-hidden="true" />
          Späť na domov
        </Link>
      </div>
    </main>
  )
}
