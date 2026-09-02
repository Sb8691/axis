import { ArrowRight, ChevronRight } from 'lucide-react'
import { Link } from 'react-router-dom'

type PageHeroProps = {
  title: string
  breadcrumb: string
  description: string
  image: string
  imageAlt: string
  imageWidth?: number
  imageHeight?: number
  showCta?: boolean
}

export function PageHero({
  title,
  breadcrumb,
  description,
  image,
  imageAlt,
  imageWidth = 1170,
  imageHeight = 658,
  showCta = false,
}: PageHeroProps) {
  return (
    <section className="relative overflow-hidden bg-white" aria-labelledby="page-title">
      <div className="mx-auto grid max-w-[1600px] lg:min-h-[440px] lg:grid-cols-[46%_54%]">
        <div className="relative z-10 flex items-center">
          <div className="w-full px-5 pb-11 pt-12 sm:px-8 sm:py-16 lg:ml-auto lg:max-w-[640px] lg:px-10 lg:py-20 xl:px-12">
            <nav className="flex items-center gap-2 text-sm font-medium text-slate-500" aria-label="Navigačná cesta">
              <Link to="/" className="min-h-11 py-3 text-[#37689d] transition-colors hover:text-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime">Domov</Link>
              <ChevronRight className="h-4 w-4" aria-hidden="true" />
              <span className="text-[#8ca300]" aria-current="page">{breadcrumb}</span>
            </nav>
            <h1 id="page-title" className="mt-3 max-w-xl text-[2.75rem] font-extrabold leading-[1.03] tracking-[-0.045em] text-ink sm:text-6xl lg:text-[4rem]">
              {title}
            </h1>
            <p className="mt-6 max-w-xl text-base leading-7 text-slate-600 sm:text-lg sm:leading-8">{description}</p>
            {showCta ? (
              <Link to="/kontakt" className="button-primary mt-8 w-full sm:w-auto">
                Nezáväzná konzultácia
                <ArrowRight className="h-4 w-4" aria-hidden="true" />
              </Link>
            ) : null}
          </div>
        </div>

        <div className="page-hero-image relative min-h-[310px] w-screen sm:min-h-[390px] lg:min-h-0 lg:w-auto">
          <img
            src={image}
            alt={imageAlt}
            width={imageWidth}
            height={imageHeight}
            className="absolute inset-0 h-full w-full object-cover"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-navy/20 via-transparent to-transparent lg:bg-gradient-to-r lg:from-white lg:via-white/5 lg:to-transparent" aria-hidden="true" />
        </div>
      </div>
    </section>
  )
}
