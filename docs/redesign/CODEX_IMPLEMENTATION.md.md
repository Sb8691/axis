# AXIS.sk Redesign — Codex Implementation Brief

## Role

You are acting as a senior frontend engineer and UI implementer.

Your task is to build a new responsive website for **AXIS Energy Solutions / axis.sk** based on the supplied redesign references and the content/assets from the existing legacy website.

The goal is **not** to recreate the old website technically. The legacy website is only a source of factual content, contact details, logo assets, project photos, and references.

---

## Repository context

The repository contains:

```text
legacy/
```

This is a local mirror of the current AXIS.sk website.

Use it only as a content and asset source.

The redesign visual references are stored in:

```text
docs/redesign/
```

The NEW website must be created entirely inside:

```text
src_codex/
```

Treat `src_codex/` as the root directory of the new frontend application.

Do NOT place the new React/Vite application in the repository root.
Do NOT modify or repurpose any existing `src/` directory.
Do NOT modify `legacy/`.

All new application files should live under `src_codex/`, for example:

```text
src_codex/
  package.json
  vite.config.ts
  tsconfig.json
  index.html
  public/
  src/
    components/
    pages/
    data/
    assets/
```

When running npm commands for the new site, run them from `src_codex/`.

There are two key visual references there:

1. desktop homepage redesign
2. mobile/responsive redesign

**Inspect both redesign images before writing code.**

The desktop reference defines the primary visual language.

The mobile reference defines how the same design should behave responsively. Do not merely shrink the desktop version.

---

# Primary objective

Build a polished, production-quality responsive homepage for AXIS that communicates the company as a serious B2B energy / engineering partner.

The visual direction is:

> industrial engineering × energy technology × modern architecture

The site should feel appropriate for a company delivering large commercial and industrial energy projects.

It must **not** feel like a generic solar-panel landing-page template.

---

# Positioning

Primary positioning:

> **Energetické riešenia pre firmy**

Main message:

> **Znižujeme firmám náklady na energiu.**

Main solution areas:

1. Fotovoltické elektrárne
2. Energetické riešenia
3. LED osvetlenie

AXIS should be presented as a company capable of taking responsibility for the full lifecycle:

> Analýza → Návrh → Realizácia → Prevádzka / Servis

---

# Technology

Use:

- React
- TypeScript
- Vite
- Tailwind CSS
- React Router only if needed
- semantic HTML
- modern responsive CSS
- minimal dependencies

Do not introduce a heavy component library.

Do not use Bootstrap, Material UI, Ant Design, etc.

Prefer reusable native React components and Tailwind utilities.

---

# Existing content and assets

Before implementation, inspect `legacy/` and identify:

- AXIS logo assets
- photovoltaic project photos
- industrial facility / rooftop images
- LED project images
- reference/project content
- company contact details
- factual company statistics
- existing service descriptions

Reuse real AXIS assets wherever possible.

Do not permanently reference assets using deep paths inside `legacy/`.

Copy selected reusable assets into a clean new structure such as:

```text
public/images/
src/assets/
```

Use descriptive filenames.

Example:

```text
public/images/
  axis-logo.svg
  references/
    industrial-rooftop-600kwp.webp
    production-site-121kwp.webp
    strojarne-detva-led.webp
```

Do not modify or delete `legacy/`.

---

# Visual system

The main reference is the desktop redesign in `docs/redesign/`.

## Colors

Use approximately:

```text
Deep Navy
#071B2D

Dark Navy / text
#0A1C2C

Electric Lime
#C7E600

White
#FFFFFF

Soft background
#F6F7F5
```

If the existing AXIS brand/logo contains a specific blue, keep the logo itself authentic.

Do not recolor the logo unless necessary.

The lime should be an accent, not the dominant page background.

---

## Typography

Use a modern sans-serif.

Preferred:

```text
Inter
```

Fallback:

```css
font-family:
  Inter,
  ui-sans-serif,
  system-ui,
  -apple-system,
  BlinkMacSystemFont,
  "Segoe UI",
  sans-serif;
```

Typography should feel strong and architectural.

Desktop H1 should be large and confident.

Mobile H1 must remain readable and should not be compressed simply to preserve desktop line breaks.

---

## General design principles

Use:

- strong typographic hierarchy
- generous whitespace
- large real project photography
- clean rectangular grids
- subtle borders
- restrained corner radii
- minimal shadows
- strong quantitative data
- clear CTA hierarchy
- crisp line icons

Avoid:

- glassmorphism
- excessive gradients
- generic sustainability illustrations
- cartoon icons
- excessive card rounding
- huge shadows
- excessive animation
- decorative clutter
- stock-photo visual language
- green "eco website" clichés

---

# Layout / responsive strategy

Build **mobile-first**.

Required test widths:

```text
375px
390px
430px
768px
1024px
1280px
1440px+
```

No horizontal overflow at any breakpoint.

Normal content should have a maximum width around:

```text
1200–1280px
```

Full-bleed backgrounds and images may extend beyond that where appropriate.

Minimum comfortable body text on mobile should be around 16px.

Interactive controls should have at least ~44px touch height.

---

# Homepage structure

Implement the following sections in this order.

---

## 1. Header

### Desktop

Structure:

```text
AXIS logo

Riešenia
Referencie
O nás
Kontakt

phone number

[ NEZÁVÄZNÁ KONZULTÁCIA ]
```

The header should be minimal and clean.

The CTA uses the lime accent.

### Mobile

Use:

```text
AXIS logo                         hamburger
```

The header may be sticky.

Hamburger menu requirements:

- keyboard accessible
- clear open / close state
- body scroll should not behave awkwardly
- navigation links large enough for touch
- consultation CTA visible inside mobile menu
- phone number accessible
- Escape key should close menu if practical

Do not use a tiny desktop navigation squeezed onto mobile.

---

# 2. Hero

Eyebrow:

> ENERGETICKÉ RIEŠENIA PRE FIRMY

Main headline:

> Znižujeme firmám náklady na energiu.

Supporting copy:

> Navrhujeme a realizujeme fotovoltiku, inteligentné energetické riešenia a LED osvetlenie od prvého výpočtu až po dlhodobý servis.

Primary CTA:

> NEZÁVÄZNÁ KONZULTÁCIA

Secondary CTA:

> POZRIEŤ REALIZÁCIE

Use a strong real AXIS photovoltaic / industrial project image.

### Desktop composition

Approximately:

```text
45% text / CTA
55% image
```

Image can bleed toward the right viewport edge.

The visual reference uses a soft transition between the white content area and the large project photo.

Recreate the overall visual impression, but do not build a fragile hard-coded screenshot.

### Mobile composition

Important:

Do NOT simply scale down the desktop hero.

Order:

```text
eyebrow
headline
copy
primary CTA
secondary CTA
large hero image
```

Buttons can become full-width.

Image should feel visually significant and almost/full bleed.

---

# 3. Trust / KPI strip

Display four metrics:

### 10+
> rokov skúseností

### 300+
> LED projektov

### FVE do 1 MW
> realizované projekty

### Kompletný servis
> od návrhu po prevádzku

Use simple lime-accent line icons.

### Desktop

Four equal columns.

### Mobile

2 × 2 grid.

The numbers/headlines should be visually stronger than their descriptions.

---

# 4. Solutions

Eyebrow:

> NAŠE RIEŠENIA

Headline:

> Komplexná starostlivosť o vašu energiu

Three cards:

---

### Fotovoltické elektrárne

Short summary explaining complete commercial photovoltaic solutions.

Benefits should be concise, for example:

- Analýza spotreby a návratnosti
- Projekt a 3D simulácie
- Realizácia a pripojenie
- Monitoring a servis

CTA:

> ZISTIŤ VIAC →

---

### Energetické riešenia

Focus on:

- energy analysis
- intelligent consumption control
- battery systems
- optimization
- monitoring/reporting

CTA:

> ZISTIŤ VIAC →

---

### LED osvetlenie

Focus on:

- lighting design
- energy reduction
- installation
- intelligent control
- maintenance/service

CTA:

> ZISTIŤ VIAC →

---

Each card should contain:

- real relevant image
- small lime icon treatment
- heading
- short description
- 3–4 benefit bullets
- CTA

### Desktop

Three-column grid.

### Mobile

One card per row.

Do not squeeze three small cards into the mobile viewport.

Images should remain visually strong.

---

# 5. References

Use a full-width **deep navy** section.

Eyebrow:

> REFERENCIE

Headline:

> Skutočné projekty, reálne výsledky

This is one of the most important sections of the site.

Use real AXIS project images and real available factual values.

Example reference presentation:

---

### Priemyselný objekt

```text
600 kWp
inštalovaný výkon

516 kW
výkon meničov
```

---

### Výrobný areál

```text
121,38 kWp
inštalovaný výkon

97 kW
výkon meničov
```

---

### Strojárne Detva

```text
+180 %
intenzita osvetlenia

€ 4 755 / rok
ročná úspora
```

CTA:

> POZRIEŤ PROJEKT →

Section-level CTA:

> VŠETKY REFERENCIE →

The quantitative values should be visually prominent.

### Desktop

Three project cards.

### Mobile

Prefer full-width vertical cards.

A subtle snap carousel is acceptable only if it improves UX, but normal vertical cards are preferred.

Do not make tiny multi-column project cards on mobile.

---

# 6. Process

Eyebrow:

> AKO PRACUJEME

Headline:

> Od analýzy po dlhodobú prevádzku

Steps:

---

### 01 Analýza

> Analyzujeme vašu spotrebu, prevádzku a možnosti úspor.

### 02 Návrh

> Navrhneme technické riešenie a ekonomiku projektu.

### 03 Realizácia

> Zabezpečíme projekt, montáž a pripojenie.

### 04 Prevádzka

> Monitoring, servis a neustála optimalizácia.

---

### Desktop

Horizontal four-step sequence.

Use a subtle connecting line / arrow language.

### Mobile

Convert this into a deliberate **vertical timeline**.

Use:

```text
01
|
02
|
03
|
04
```

with icons, headings and descriptions.

This should look purpose-built for mobile.

---

# 7. Final CTA

Headline:

> Koľko môžete ušetriť práve vy?

Supporting copy:

> Nezáväzná konzultácia a predbežný návrh zdarma.

Primary CTA:

> DOHODNÚŤ KONZULTÁCIU

Also display the real AXIS phone number from `legacy/`.

The phone number should be a clickable `tel:` link.

Use a subtle real project background image or texture.

Maintain excellent text contrast.

### Mobile

Primary CTA should be full-width or nearly full-width.

Phone contact should be a separate, clear tappable control.

---

# 8. Footer

Use deep navy.

Include:

- AXIS logo
- short company summary
- Riešenia
- Referencie
- O nás
- Kontakt
- social links if genuinely present
- privacy/cookies links if available

Use actual company information from `legacy/`.

### Mobile

Stack sections vertically.

Avoid a tiny multi-column desktop footer compressed onto mobile.

---

# Components

Create a sensible component structure inside `src_codex/`, for example:

```text
src_codex/
  src/
    components/
      layout/
        Header.tsx
        Footer.tsx

      home/
        Hero.tsx
        Stats.tsx
        Solutions.tsx
        References.tsx
        Process.tsx
        FinalCta.tsx

    data/
      solutions.ts
      references.ts

    pages/
      HomePage.tsx

    assets/
```

This is a suggestion, not a mandatory architecture.

Do not over-engineer.

---

# Icons

Prefer a lightweight line-icon package if one is already available.

If adding one, keep it small and consistent.

Good options:

- Lucide
- simple custom SVGs

Icons should share one visual language.

Use the electric lime primarily for icon accents.

---

# Interaction

Keep animation restrained.

Good:

- subtle button hover
- slight image scale on project-card hover
- subtle card elevation
- menu transition
- small underline/arrow motion

Avoid:

- scroll-jacking
- large parallax
- constant animated backgrounds
- excessive entrance animations
- anything that distracts from quantitative content

Animations should respect:

```css
prefers-reduced-motion
```

where applicable.

---

# Accessibility

Implement:

- semantic landmarks
- `<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`
- logical heading hierarchy
- descriptive image alt text
- keyboard navigation
- visible focus states
- adequate color contrast
- accessible menu button
- meaningful button/link labels
- `aria-*` only where genuinely useful

---

# Image handling

Do not ship unnecessarily huge original images.

Where practical:

- copy selected images out of `legacy`
- resize large source images
- use WebP/AVIF where convenient
- keep good JPEG fallback if needed
- lazy-load below-the-fold images
- do not lazy-load the main hero image
- specify dimensions / aspect ratios to prevent layout shift

Use CSS `object-fit: cover` thoughtfully.

Do not crop important project content awkwardly.

---

# SEO

Set up sensible homepage metadata.

Example title:

> AXIS Energy Solutions | Energetické riešenia pre firmy

Example description:

> Fotovoltické elektrárne, inteligentné energetické riešenia a LED osvetlenie pre firmy. Od analýzy a návrhu až po realizáciu, monitoring a servis.

Add:

- viewport
- title
- meta description
- basic Open Graph metadata
- canonical URL if appropriate
- meaningful semantic content

Do not copy incorrect legacy SEO metadata.

---

# Content rules

Facts must come from the existing AXIS website / legacy data.

Do not invent:

- certifications
- years of experience
- number of projects
- savings
- customer names
- project performance
- addresses
- phone numbers
- email addresses

If a value in the redesign reference conflicts with actual legacy content, prefer verified legacy content.

If uncertain, leave a clearly marked TODO rather than inventing a fact.

---

# Do not do

Do NOT:

- modify `legacy/`
- create the new application in the repository root
- put the new application into an existing `src/` directory
- write new frontend application files outside `src_codex/` except documentation explicitly requested by the user
- rebuild the legacy HTML
- use iframe embedding
- make the page a screenshot/background-image recreation
- hardcode the desktop screenshot as one giant image
- use absolute positioning for the whole page
- use dozens of arbitrary pixel offsets to imitate the screenshot
- introduce a CMS
- add a backend
- add a heavy design framework
- invent fake customer data
- invent fake AXIS facts
- sacrifice mobile usability to match desktop pixels

The references are design guidance, not pixel-by-pixel raster targets.

---

# Implementation workflow

## Phase 1 — inspect

Before coding:

1. inspect `docs/redesign/`
2. inspect `legacy/`
3. locate the best logo
4. locate the best hero image
5. locate relevant service images
6. locate at least 3 reference images
7. locate real contact information
8. identify useful factual project metrics

Return a short summary of what you found.

Then proceed without waiting for approval unless a critical required asset is missing.

---

## Phase 2 — foundation

Create / verify the application inside `src_codex/`:

- Vite React TypeScript app
- Tailwind setup
- global typography
- color tokens
- common container system
- responsive spacing
- image assets

---

## Phase 3 — implement homepage

Implement section by section:

1. Header
2. Hero
3. Stats
4. Solutions
5. References
6. Process
7. Final CTA
8. Footer

---

## Phase 4 — responsive polish

Compare explicitly against BOTH references in:

```text
docs/redesign/
```

Check:

- desktop composition
- mobile hierarchy
- card spacing
- line lengths
- image crops
- button sizes
- nav behavior
- KPI layout
- process transformation
- footer stacking

---

## Phase 5 — validation

From `src_codex/`, run:

```bash
cd src_codex
npm run build
```

Also run available:

```bash
npm run lint
npm run typecheck
```

if configured.

Fix all TypeScript, build and lint errors.

---

# Acceptance criteria

The task is complete when:

- [ ] homepage builds successfully
- [ ] desktop design strongly matches the provided redesign direction
- [ ] mobile design strongly matches the dedicated mobile reference
- [ ] no horizontal scrolling occurs at common mobile sizes
- [ ] header/navigation works on desktop and mobile
- [ ] mobile menu is usable and accessible
- [ ] actual AXIS logo is used
- [ ] real AXIS project photography is used where available
- [ ] real contact information is used
- [ ] no unsupported facts are invented
- [ ] hero behaves intentionally on mobile
- [ ] KPI section becomes a 2×2 mobile grid
- [ ] solution cards become single-column on mobile
- [ ] references remain easy to read on mobile
- [ ] process becomes a vertical mobile timeline
- [ ] CTA buttons are touch-friendly
- [ ] images are reasonably optimized
- [ ] below-the-fold images are lazy loaded where appropriate
- [ ] page has sane SEO metadata
- [ ] accessibility basics are covered
- [ ] TypeScript/build errors are zero
- [ ] `legacy/` remains untouched
- [ ] all new frontend application code lives inside `src_codex/`
- [ ] repository root is not turned into the Vite application

---

# Final quality bar

Do not stop at a rough wireframe.

The output should feel polished enough that the deployed homepage could be shown directly to AXIS management as a credible redesign proposal.

Prioritize:

1. hierarchy
2. real project imagery
3. quantitative proof
4. responsive behavior
5. typography
6. spacing
7. subtle polish

The final result should communicate:

> **AXIS is an experienced engineering and energy partner, not merely a seller of solar panels or LED lighting.**
