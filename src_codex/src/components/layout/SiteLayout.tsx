import { useEffect } from 'react'
import { Outlet, useLocation } from 'react-router-dom'
import { Footer } from './Footer'
import { Header } from './Header'

export function SiteLayout() {
  const { pathname, hash } = useLocation()

  useEffect(() => {
    if (hash) {
      window.requestAnimationFrame(() => document.querySelector(hash)?.scrollIntoView())
      return
    }

    window.scrollTo({ top: 0 })
  }, [hash, pathname])

  return (
    <>
      <a href="#main-content" className="skip-link">Preskočiť na obsah</a>
      <Header />
      <Outlet />
      <Footer />
    </>
  )
}
