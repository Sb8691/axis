import { ArrowRight } from 'lucide-react'
import type { ReactNode } from 'react'

type ArrowLinkProps = {
  href: string
  children: ReactNode
  inverse?: boolean
  className?: string
  onClick?: () => void
}

export function ArrowLink({ href, children, inverse = false, className = '', onClick }: ArrowLinkProps) {
  return (
    <a
      href={href}
      onClick={onClick}
      className={`group inline-flex min-h-11 items-center gap-2 text-xs font-extrabold uppercase tracking-[0.12em] transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-lime ${
        inverse ? 'text-lime hover:text-white' : 'text-[#91a900] hover:text-ink'
      } ${className}`}
    >
      <span>{children}</span>
      <ArrowRight aria-hidden="true" className="h-4 w-4 transition-transform group-hover:translate-x-1" />
    </a>
  )
}
