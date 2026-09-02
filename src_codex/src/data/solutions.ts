import type { LucideIcon } from 'lucide-react'
import { BatteryCharging, ChartNoAxesCombined, Lightbulb, Sun } from 'lucide-react'
import { assetUrl } from '../lib/assets'

export type Solution = {
  slug: string
  title: string
  shortTitle: string
  description: string
  detailDescription: string
  image: string
  imageAlt: string
  href: string
  icon: LucideIcon
  benefits: string[]
  imageWidth: number
  imageHeight: number
  imageClassName?: string
  showOnHomepage?: boolean
}

export const solutions: Solution[] = [
  {
    slug: 'fotovoltika',
    title: 'Fotovoltické elektrárne',
    shortTitle: 'Fotovoltika',
    description:
      'Navrhneme optimálne riešenie pre vašu prevádzku a zabezpečíme celý projekt od výpočtu po servis.',
    detailDescription:
      'Navrhujeme, projektujeme a inštalujeme strešné fotovoltické elektrárne pre firmy. Riešenie vychádza z analýzy spotreby a možností konkrétnej prevádzky.',
    image: assetUrl('images/solar-rooftop.webp'),
    imageAlt: 'Fotovoltické panely na streche priemyselného objektu',
    href: '/riesenia/fotovoltika',
    icon: Sun,
    benefits: [
      'Analýza spotreby a návratnosti',
      'Projekt a 3D simulácie',
      'Realizácia a pripojenie',
      'Monitoring a servis',
    ],
    imageWidth: 1200,
    imageHeight: 630,
    showOnHomepage: true,
  },
  {
    slug: 'bateriove-systemy',
    title: 'Batériové systémy',
    shortTitle: 'Batériové systémy',
    description:
      'Batériové úložisko navrhneme podľa spotreby, rezervovanej kapacity a spôsobu prevádzky objektu.',
    detailDescription:
      'Dodávame a inštalujeme batériové úložiská pre firmy, priemyselné areály a komerčné objekty. Integrujeme ich s novou alebo existujúcou fotovoltickou elektrárňou a energetickým manažmentom.',
    image: assetUrl('images/solutions/battery-storage.webp'),
    imageAlt: 'Batériové úložisko KONJA pri fotovoltickej elektrárni',
    href: '/riesenia/bateriove-systemy',
    icon: BatteryCharging,
    benefits: [
      'Návrh kapacity a výkonu',
      'Integrácia s fotovoltikou',
      'Dodávka a uvedenie do prevádzky',
      'Monitoring a servis',
    ],
    imageWidth: 1200,
    imageHeight: 800,
  },
  {
    slug: 'energeticke-riesenia',
    title: 'Energetické riadenie',
    shortTitle: 'Energetické riešenia',
    description:
      'Prepájame výrobu, akumuláciu a riadenie spotreby do jedného efektívneho energetického systému.',
    detailDescription:
      'Na základe energetickej analýzy nastavíme riadenie výroby, spotreby a prebytkov. Cieľom je efektívne využitie vyrobenej elektriny a prehľad o prevádzke.',
    image: assetUrl('images/energy-monitoring.webp'),
    imageAlt: 'Technické monitorovanie výkonu fotovoltickej elektrárne',
    href: '/riesenia/energeticke-riesenia',
    icon: ChartNoAxesCombined,
    benefits: [
      'Energetické analýzy',
      'Riadenie prebytkov a batérií',
      'Optimalizácia spotreby',
      'Monitoring a reporting',
    ],
    imageWidth: 950,
    imageHeight: 416,
    imageClassName: 'object-contain bg-white p-5',
    showOnHomepage: true,
  },
  {
    slug: 'led-osvetlenie',
    title: 'LED osvetlenie',
    shortTitle: 'LED osvetlenie',
    description:
      'Znižujeme spotrebu a zlepšujeme svetelné podmienky v priemyselných aj komerčných prevádzkach.',
    detailDescription:
      'Osvetlenie navrhneme na mieru konkrétnemu priestoru. Zabezpečíme svetelno-technické výpočty, dokumentáciu, dodávku, elektroinštaláciu, revíziu aj servis.',
    image: assetUrl('images/industrial-led-lighting.webp'),
    imageAlt: 'Moderné LED osvetlenie vo výrobnej hale',
    href: '/riesenia/led-osvetlenie',
    icon: Lightbulb,
    benefits: [
      'Svetelné výpočty a návrh',
      'Dodávka a inštalácia',
      'Inteligentné riadenie',
      'Servis a údržba',
    ],
    imageWidth: 1170,
    imageHeight: 420,
    showOnHomepage: true,
  },
]

export const homeSolutions = solutions.filter((solution) => solution.showOnHomepage)
