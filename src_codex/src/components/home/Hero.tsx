import { ArrowDownRight, ArrowRight } from 'lucide-react'

export function Hero() {
  return (
    <section id="top" className="relative overflow-hidden bg-white" aria-labelledby="hero-title">
      <div className="mx-auto grid max-w-[1600px] lg:min-h-[570px] lg:grid-cols-[48%_52%] xl:min-h-[620px]">
        <div className="relative z-10 flex items-center">
          <div className="w-full px-5 pb-11 pt-14 sm:px-8 sm:pb-14 sm:pt-16 lg:ml-auto lg:max-w-[640px] lg:px-10 lg:py-20 xl:px-12">
            <p className="eyebrow">Energetické riešenia pre firmy</p>
            <h1 id="hero-title" className="mt-5 max-w-[680px] text-[2.75rem] font-extrabold leading-[1.02] tracking-[-0.045em] text-ink sm:text-6xl lg:text-[4.25rem] xl:text-[4.7rem]">
              Znižujeme firmám náklady na energiu.
            </h1>
            <p className="mt-6 max-w-xl text-base leading-7 text-slate-600 sm:text-lg sm:leading-8">
              Navrhujeme a realizujeme fotovoltiku, inteligentné energetické riešenia a LED osvetlenie od prvého výpočtu až po dlhodobý servis.
            </p>
            <div className="mt-8 grid gap-3 sm:flex sm:flex-wrap">
              <a href="#kontakt" className="button-primary sm:min-w-[228px]">
                Nezáväzná konzultácia
                <ArrowRight className="h-4 w-4" aria-hidden="true" />
              </a>
              <a href="#referencie" className="button-secondary sm:min-w-[210px]">
                Pozrieť realizácie
                <ArrowDownRight className="h-4 w-4" aria-hidden="true" />
              </a>
            </div>
          </div>
        </div>

        <div className="hero-image-wrap relative min-h-[340px] w-screen sm:min-h-[440px] lg:min-h-0 lg:w-auto">
          <img
            src="/images/axis-industrial-solar.webp"
            alt="Priemyselný areál s fotovoltickou elektrárňou AXIS"
            width="1170"
            height="658"
            className="absolute inset-0 h-full w-full object-cover object-[52%_center]"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-navy/25 via-transparent to-transparent lg:bg-gradient-to-r lg:from-white lg:via-white/5 lg:to-transparent" aria-hidden="true" />
          <div className="absolute bottom-5 right-5 flex items-center gap-3 border border-white/35 bg-navy/85 px-4 py-3 text-white backdrop-blur-sm sm:bottom-7 sm:right-7" aria-hidden="true">
            <span className="text-2xl font-extrabold text-lime">600</span>
            <span className="text-[11px] font-bold uppercase tracking-[0.12em]">kWp<br />realizácia</span>
          </div>
        </div>
      </div>
    </section>
  )
}
