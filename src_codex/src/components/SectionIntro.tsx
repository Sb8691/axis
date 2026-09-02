type SectionIntroProps = {
  id?: string
  eyebrow: string
  title: string
  description?: string
  align?: 'left' | 'center'
  inverse?: boolean
}

export function SectionIntro({
  id,
  eyebrow,
  title,
  description,
  align = 'center',
  inverse = false,
}: SectionIntroProps) {
  const alignment = align === 'center' ? 'mx-auto text-center' : ''

  return (
    <div className={`max-w-3xl ${alignment}`}>
      <p className="eyebrow">{eyebrow}</p>
      <h2 id={id} className={`section-title mt-3 ${inverse ? 'text-white' : 'text-ink'}`}>{title}</h2>
      {description ? (
        <p className={`mt-5 text-lg leading-8 ${inverse ? 'text-white/65' : 'text-slate-600'}`}>
          {description}
        </p>
      ) : null}
    </div>
  )
}
