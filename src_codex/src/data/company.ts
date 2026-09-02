import { assetUrl } from '../lib/assets'

export const company = {
  legalName: 'AXIS ES s.r.o.',
  address: {
    street: 'Gogoľova 18',
    postalCode: '851 05',
    city: 'Bratislava',
    country: 'Slovensko',
  },
  phoneDisplay: '+421 948 465 331',
  phoneHref: 'tel:+421948465331',
  email: 'axises@axis.sk',
  registry: 'Obchodný register Mestského súdu Bratislava III, oddiel Sro, vložka č. 51696/B.',
  mapUrl: 'https://www.openstreetmap.org/?mlat=48.122337&mlon=17.092294#map=17/48.122337/17.092294',
  privacyDocument: assetUrl('documents/axis-gdpr.pdf'),
} as const
