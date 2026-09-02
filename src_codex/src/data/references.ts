export type ProjectReference = {
  category: string
  title: string
  image: string
  imageAlt: string
  href: string
  metrics: Array<{
    value: string
    label: string
  }>
}

export const references: ProjectReference[] = [
  {
    category: 'Fotovoltika',
    title: 'Priemyselný objekt',
    image: '/images/axis-industrial-solar.webp',
    imageAlt: 'Priemyselný areál s fotovoltickými panelmi na strechách',
    href: '/referencie/fotovolticka-elektraren-600-kwp',
    metrics: [
      { value: '600 kWp', label: 'inštalovaný výkon' },
      { value: '516 kW', label: 'výkon meničov' },
    ],
  },
  {
    category: 'Fotovoltika',
    title: 'Výrobný areál',
    image: '/images/references/production-site-121kwp.webp',
    imageAlt: 'Fotovoltická elektráreň s výkonom 121,38 kWp vo výrobnom areáli',
    href: '/referencie/fotovolticka-elektraren-121-kwp',
    metrics: [
      { value: '121,38 kWp', label: 'inštalovaný výkon' },
      { value: '97 kW', label: 'výkon meničov' },
    ],
  },
  {
    category: 'LED osvetlenie',
    title: 'Strojárne Detva',
    image: '/images/references/strojarne-detva-led.webp',
    imageAlt: 'LED osvetlenie vo výrobnej hale Strojární Detva',
    href: '/referencie/strojarne-detva',
    metrics: [
      { value: '+180 %', label: 'intenzita osvetlenia' },
      { value: '4 755 € / rok', label: 'ročná úspora' },
    ],
  },
]
