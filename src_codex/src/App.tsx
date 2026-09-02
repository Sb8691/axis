import { Route, Routes } from 'react-router-dom'
import { SiteLayout } from './components/layout/SiteLayout'
import { AboutPage } from './pages/AboutPage'
import { ContactPage } from './pages/ContactPage'
import { HomePage } from './pages/HomePage'
import { NotFoundPage } from './pages/NotFoundPage'
import { ReferenceDetailPage } from './pages/ReferenceDetailPage'
import { ReferencesPage } from './pages/ReferencesPage'
import { SolutionDetailPage } from './pages/SolutionDetailPage'
import { SolutionsPage } from './pages/SolutionsPage'

export default function App() {
  return (
    <Routes>
      <Route element={<SiteLayout />}>
        <Route index element={<HomePage />} />
        <Route path="riesenia" element={<SolutionsPage />} />
        <Route path="riesenia/:slug" element={<SolutionDetailPage />} />
        <Route path="referencie" element={<ReferencesPage />} />
        <Route path="referencie/:slug" element={<ReferenceDetailPage />} />
        <Route path="o-nas" element={<AboutPage />} />
        <Route path="kontakt" element={<ContactPage />} />
        <Route path="*" element={<NotFoundPage />} />
      </Route>
    </Routes>
  )
}
