import { assetUrl } from '../lib/assets'

export type ReferenceCategory = 'Fotovoltika' | 'LED osvetlenie'

export type ProjectMetric = {
  value: string
  label: string
}

export type ProjectReference = {
  slug: string
  category: ReferenceCategory
  title: string
  description: string
  image: string
  imageAlt: string
  href: string
  imageWidth: number
  imageHeight: number
  metrics: ProjectMetric[]
  featured?: boolean
}

export const references: ProjectReference[] = [
  {
    slug: 'fotovolticka-elektraren-600-kwp',
    category: 'Fotovoltika',
    title: 'Priemyselný objekt – FVE',
    description:
      'Fotovoltická elektráreň na strechách priemyselného objektu využíva technológiu optimizérov a striedačov SolarEdge.',
    image: assetUrl('images/axis-industrial-solar.webp'),
    imageAlt: 'Priemyselný areál s fotovoltickými panelmi na strechách',
    href: '/referencie/fotovolticka-elektraren-600-kwp',
    imageWidth: 1170,
    imageHeight: 658,
    metrics: [
      { value: '600 kWp', label: 'inštalovaný výkon' },
      { value: '516 kW', label: 'výkon meničov' },
    ],
  },
  {
    slug: 'fotovolticka-elektraren-121-kwp',
    category: 'Fotovoltika',
    title: 'Polyfunkčný objekt – FVE',
    description:
      'Elektráreň je nainštalovaná na streche polyfunkčného objektu. Prebytky vyrobenej elektriny sa využívajú pre nabíjaciu stanicu elektromobilov.',
    image: assetUrl('images/references/production-site-121kwp.webp'),
    imageAlt: 'Fotovoltická elektráreň s výkonom 121,38 kWp na polyfunkčnom objekte',
    href: '/referencie/fotovolticka-elektraren-121-kwp',
    imageWidth: 1170,
    imageHeight: 420,
    metrics: [
      { value: '121,38 kWp', label: 'inštalovaný výkon' },
      { value: '97 kW', label: 'výkon meničov' },
      { value: '140 MWh', label: 'ročná výroba' },
    ],
    featured: true,
  },
  {
    slug: 'strojarne-detva',
    category: 'LED osvetlenie',
    title: 'Strojárne Detva',
    description:
      'Výmena osvetľovacej sústavy a elektrických rozvodov vo výrobnej hale zvýšila intenzitu osvetlenia a znížila prevádzkové náklady.',
    image: assetUrl('images/references/strojarne-detva-led.webp'),
    imageAlt: 'LED osvetlenie vo výrobnej hale Strojární Detva',
    href: '/referencie/strojarne-detva',
    imageWidth: 1170,
    imageHeight: 420,
    metrics: [
      { value: '+180 %', label: 'intenzita osvetlenia' },
      { value: '4 755 € / rok', label: 'ročná úspora' },
      { value: '38 mesiacov', label: 'návratnosť' },
    ],
  },
  {
    slug: 'petrzalska-plavaren',
    category: 'Fotovoltika',
    title: 'Petržalská plaváreň',
    description:
      'Strešná fotovoltická elektráreň s optimizérmi a striedačmi SolarEdge pre maximalizáciu ročnej produkcie elektriny.',
    image: assetUrl('images/references/petrzalka-pool-solar.webp'),
    imageAlt: 'Fotovoltická elektráreň na streche Petržalskej plavárne',
    href: '/referencie/petrzalska-plavaren',
    imageWidth: 1170,
    imageHeight: 420,
    metrics: [
      { value: '130 kWp', label: 'inštalovaný výkon' },
      { value: '90 kW', label: 'výkon meničov' },
      { value: '135 MWh', label: 'ročná výroba' },
    ],
  },
  {
    slug: 'way-industries-krupina',
    category: 'LED osvetlenie',
    title: 'WAY INDUSTRIES, Krupina',
    description:
      'Kompletná rekonštrukcia elektroinštalácie a výmena osvetlenia vo výrobných halách s automatickou reguláciou intenzity.',
    image: assetUrl('images/references/way-industries-led.webp'),
    imageAlt: 'Výrobné haly WAY INDUSTRIES s moderným LED osvetlením',
    href: '/referencie/way-industries-krupina',
    imageWidth: 1170,
    imageHeight: 420,
    metrics: [
      { value: '589 ks', label: 'počet svietidiel' },
      { value: '80 700 € / rok', label: 'ročná úspora' },
      { value: '3 r. 5 mes.', label: 'návratnosť' },
    ],
  },
  {
    slug: 'trencianske-mineralne-vody',
    category: 'LED osvetlenie',
    title: 'Trenčianske minerálne vody',
    description:
      'Regulované senzorové LED svietidlá vo výrobných halách a skladoch využívajú inteligentný systém s DALI reguláciou.',
    image: assetUrl('images/references/tmv-led.webp'),
    imageAlt: 'Výrobné haly a sklady Trenčianskych minerálnych vôd s LED osvetlením',
    href: '/referencie/trencianske-mineralne-vody',
    imageWidth: 1170,
    imageHeight: 420,
    metrics: [
      { value: '187 ks', label: 'počet svietidiel' },
      { value: '13 000 € / rok', label: 'ročná úspora' },
      { value: '18 mesiacov', label: 'návratnosť' },
    ],
  },
  {
    slug: 'verejne-osvetlenie-krupina',
    category: 'LED osvetlenie',
    title: 'Verejné osvetlenie Krupina',
    description:
      'Pôvodné 250 W sodíkové svietidlá boli nahradené úspornými 80 W LED svietidlami.',
    image: assetUrl('images/references/krupina-public-lighting.webp'),
    imageAlt: 'Modernizované verejné osvetlenie v Krupine',
    href: '/referencie/verejne-osvetlenie-krupina',
    imageWidth: 1170,
    imageHeight: 420,
    metrics: [
      { value: '80 ks', label: 'počet svietidiel' },
      { value: '8 670 € / rok', label: 'ročná úspora' },
      { value: '2,4 roka', label: 'návratnosť' },
    ],
  },
]

export const homeReferences = references.slice(0, 3)
export const featuredReference = references.find((reference) => reference.featured) ?? references[0]
export const referenceGridItems = references.filter((reference) => !reference.featured)
