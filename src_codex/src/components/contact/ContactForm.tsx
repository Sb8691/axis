import { ArrowRight, LoaderCircle } from 'lucide-react'
import { FormEvent, useState } from 'react'
import { company } from '../../data/company'

type FieldName = 'name' | 'email' | 'interest' | 'message' | 'consent'
type Errors = Partial<Record<FieldName, string>>

const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/

function FieldError({ id, children }: { id: string; children?: string }) {
  return children ? <p id={id} className="mt-1.5 text-sm font-medium text-red-700">{children}</p> : null
}

export function ContactForm() {
  const [errors, setErrors] = useState<Errors>({})
  const [isSubmitting, setIsSubmitting] = useState(false)
  const [status, setStatus] = useState('')

  const handleSubmit = async (event: FormEvent<HTMLFormElement>) => {
    event.preventDefault()
    setStatus('')

    const form = new FormData(event.currentTarget)
    const values = {
      name: String(form.get('name') ?? '').trim(),
      email: String(form.get('email') ?? '').trim(),
      interest: String(form.get('interest') ?? '').trim(),
      message: String(form.get('message') ?? '').trim(),
      consent: form.get('consent') === 'on',
    }
    const nextErrors: Errors = {}

    if (!values.name) nextErrors.name = 'Uveďte meno a priezvisko.'
    if (!values.email) nextErrors.email = 'Uveďte e-mailovú adresu.'
    else if (!emailPattern.test(values.email)) nextErrors.email = 'Uveďte platnú e-mailovú adresu.'
    if (!values.interest) nextErrors.interest = 'Vyberte oblasť záujmu.'
    if (!values.message) nextErrors.message = 'Napíšte krátku správu o projekte.'
    if (!values.consent) nextErrors.consent = 'Pre spracovanie dopytu je potrebný súhlas.'

    setErrors(nextErrors)
    if (Object.keys(nextErrors).length > 0) {
      window.requestAnimationFrame(() => document.getElementById(Object.keys(nextErrors)[0])?.focus())
      return
    }

    setIsSubmitting(true)
    // TODO: Connect the validated payload to the production AXIS form endpoint.
    await new Promise((resolve) => window.setTimeout(resolve, 500))
    setIsSubmitting(false)
    setStatus(`Formulár zatiaľ nie je pripojený na odosielací server. Dopyt nebol odoslaný; kontaktujte nás na ${company.email} alebo telefonicky.`)
  }

  const fieldClass = 'form-field'

  return (
    <form noValidate onSubmit={handleSubmit} aria-describedby={status ? 'form-status' : undefined}>
      <div className="grid gap-5 sm:grid-cols-2">
        <div>
          <label className="form-label" htmlFor="name">Meno a priezvisko <span aria-hidden="true">*</span></label>
          <input className={fieldClass} id="name" name="name" type="text" autoComplete="name" aria-invalid={Boolean(errors.name)} aria-describedby={errors.name ? 'name-error' : undefined} />
          <FieldError id="name-error">{errors.name}</FieldError>
        </div>
        <div>
          <label className="form-label" htmlFor="company">Spoločnosť</label>
          <input className={fieldClass} id="company" name="company" type="text" autoComplete="organization" />
        </div>
        <div>
          <label className="form-label" htmlFor="email">E-mail <span aria-hidden="true">*</span></label>
          <input className={fieldClass} id="email" name="email" type="email" autoComplete="email" inputMode="email" aria-invalid={Boolean(errors.email)} aria-describedby={errors.email ? 'email-error' : undefined} />
          <FieldError id="email-error">{errors.email}</FieldError>
        </div>
        <div>
          <label className="form-label" htmlFor="phone">Telefón</label>
          <input className={fieldClass} id="phone" name="phone" type="tel" autoComplete="tel" inputMode="tel" />
        </div>
      </div>

      <div className="mt-5">
        <label className="form-label" htmlFor="interest">Oblasť záujmu <span aria-hidden="true">*</span></label>
        <select className={fieldClass} id="interest" name="interest" defaultValue="" aria-invalid={Boolean(errors.interest)} aria-describedby={errors.interest ? 'interest-error' : undefined}>
          <option value="" disabled>Vyberte oblasť</option>
          <option value="fotovoltika">Fotovoltika</option>
          <option value="bateriove-systemy">Batériové systémy</option>
          <option value="energeticke-riesenia">Energetické riešenia</option>
          <option value="led-osvetlenie">LED osvetlenie</option>
          <option value="servis-ine">Servis / iné</option>
        </select>
        <FieldError id="interest-error">{errors.interest}</FieldError>
      </div>

      <div className="mt-5">
        <label className="form-label" htmlFor="message">Vaša správa <span aria-hidden="true">*</span></label>
        <textarea className={`${fieldClass} min-h-40 resize-y`} id="message" name="message" rows={6} aria-invalid={Boolean(errors.message)} aria-describedby={errors.message ? 'message-error' : undefined} />
        <FieldError id="message-error">{errors.message}</FieldError>
      </div>

      <div className="mt-5">
        <label className="flex cursor-pointer items-start gap-3 text-sm leading-6 text-slate-600" htmlFor="consent">
          <input className="mt-1 h-5 w-5 shrink-0 accent-[#91a900]" id="consent" name="consent" type="checkbox" aria-invalid={Boolean(errors.consent)} aria-describedby={errors.consent ? 'consent-error' : undefined} />
          <span>Súhlasím so spracovaním osobných údajov na účel odpovede na môj dopyt. <a className="font-bold text-[#6f8300] underline underline-offset-2" href={company.privacyDocument} target="_blank" rel="noreferrer">Viac informácií</a>.</span>
        </label>
        <FieldError id="consent-error">{errors.consent}</FieldError>
      </div>

      {status ? (
        <p id="form-status" role="status" className="mt-6 border-l-4 border-[#91a900] bg-lime/10 p-4 text-sm leading-6 text-ink">{status}</p>
      ) : null}

      <button type="submit" className="button-primary mt-7 w-full sm:w-auto" disabled={isSubmitting}>
        {isSubmitting ? <LoaderCircle className="h-4 w-4 animate-spin" aria-hidden="true" /> : null}
        {isSubmitting ? 'Kontrolujem formulár' : 'Odoslať správu'}
        {!isSubmitting ? <ArrowRight className="h-4 w-4" aria-hidden="true" /> : null}
      </button>
    </form>
  )
}
