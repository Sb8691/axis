import type { LucideIcon } from 'lucide-react'
import { BatteryCharging, Lightbulb, Sun } from 'lucide-react'

export type Solution = {
  title: string
  description: string
  image: string
  imageAlt: string
  href: string
  icon: LucideIcon
  benefits: string[]
  imageClassName?: string
}

export const solutions: Solution[] = [
  {
    title: 'Fotovoltické elektrárne',
    description:
      'Navrhneme optimálne riešenie pre vašu prevádzku a zabezpečíme celý projekt od výpočtu po servis.',
    image: '/images/solar-rooftop.webp',
    imageAlt: 'Fotovoltické panely na streche priemyselného objektu',
    href: '/fotovoltaika',
    icon: Sun,
    benefits: [
      'Analýza spotreby a návratnosti',
      'Projekt a 3D simulácie',
      'Realizácia a pripojenie',
      'Monitoring a servis',
    ],
  },
  {
    title: 'Energetické riešenia',
    description:
      'Prepájame výrobu, akumuláciu a riadenie spotreby do jedného efektívneho energetického systému.',
    image: '/images/energy-monitoring.webp',
    imageAlt: 'Technické monitorovanie výkonu fotovoltickej elektrárne',
    href: '/energeticke-riesenia',
    icon: BatteryCharging,
    benefits: [
      'Energetické analýzy',
      'Riadenie prebytkov a batérií',
      'Optimalizácia odberových profilov',
      'Monitoring a reporting',
    ],
    imageClassName: 'object-contain bg-white p-5',
  },
  {
    title: 'LED osvetlenie',
    description:
      'Znižujeme spotrebu a zlepšujeme svetelné podmienky v priemyselných aj komerčných prevádzkach.',
    image: '/images/industrial-led-lighting.webp',
    imageAlt: 'Moderné LED osvetlenie vo výrobnej hale',
    href: '/led-osvetlenie',
    icon: Lightbulb,
    benefits: [
      'Svetelné výpočty a návrh',
      'Dodávka a inštalácia',
      'Inteligentné riadenie',
      'Servis a údržba',
    ],
  },
]
