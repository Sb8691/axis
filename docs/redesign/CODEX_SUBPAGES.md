# AXIS.sk Redesign — Codex Subpages Implementation Brief

## Context

This document extends:

```text
docs/redesign/CODEX_IMPLEMENTATION.md
```

The homepage should already define the shared design system and responsive behavior.

Now implement the following four real pages in the **same design language**:

```text
/riesenia
/referencie
/o-nas
/kontakt
```

All new frontend code must remain inside:

```text
src_codex/
```

Do not modify:

```text
legacy/
```

Do not create another application. Extend the existing app in `src_codex/`.

---

# Visual references

The four page mockups are stored in:

```text
docs/redesign/
```

Before coding, inspect the actual files in that folder and identify the mockup corresponding to:

1. Riešenia
2. Referencie
3. O nás
4. Kontakt

The mockups define:

- layout
- hierarchy
- visual rhythm
- colors
- card treatment
- section order
- desktop composition

The existing homepage redesign defines the global visual system.

Do not implement the mockups as raster backgrounds. Recreate them with real semantic HTML/CSS/React components.

---

# Critical content rule

The visual mockups contain illustrative copy and may contain placeholder or invented numbers.

Before using any factual claim, inspect:

```text
legacy/
```

Use the existing AXIS website as the source of truth for:

- company address
- phone number
- email address
- years of experience
- number of projects
- project names
- project capacities
- savings
- return on investment
- partner brands
- certifications
- service descriptions
- customer/reference names

If a value cannot be verified from `legacy/`, do NOT present it as a fact.

Prefer:

- verified content
- neutral copy
- or a clearly marked TODO

over invented marketing claims.

---

# Important O nás rule

AXIS works with subcontractors / external delivery partners.

Therefore:

**DO NOT create a fake team section.**

Do not use:

- generated employee portraits
- invented employee names
- fake management profiles
- claims about a large internal installation team unless verified

The O nás page should instead emphasize:

- experience
- responsibility for the project
- engineering / project coordination
- trusted technology partners
- subcontractor / partner network
- quality control
- long-term client relationships
- complete project coordination

The page may explicitly communicate that individual projects are delivered together with verified partners and subcontractors.

---

# Shared application structure

Extend the current app with routing.

Suggested structure:

```text
src_codex/
  src/
    components/
      layout/
        Header.tsx
        Footer.tsx
        PageHero.tsx
        ConsultationCta.tsx
        Process.tsx

      common/
        SectionHeading.tsx
        Metric.tsx
        IconCard.tsx

      references/
        ReferenceCard.tsx
        ReferenceFilters.tsx

    pages/
      HomePage.tsx
      SolutionsPage.tsx
      ReferencesPage.tsx
      AboutPage.tsx
      ContactPage.tsx

    data/
      solutions.ts
      references.ts
      company.ts
```

Reuse shared components wherever sensible.

Do not over-abstract just to reduce line count.

---

# Routing

Implement these routes:

```text
/                    -> homepage
/riesenia             -> Riešenia
/referencie            -> Referencie
/o-nas                 -> O nás
/kontakt               -> Kontakt
```

Use React Router if routing is not already configured.

Navigation must work using client-side links.

Active navigation state should be visually recognizable but subtle.

---

# Shared header and footer

All pages must use the same Header and Footer components.

The design must remain consistent with the homepage.

Header desktop:

```text
AXIS
Riešenia
Referencie
O nás
Kontakt
phone
[ NEZÁVÄZNÁ KONZULTÁCIA ]
```

Mobile:

```text
AXIS                         hamburger
```

The mobile menu must include all four routes, contact phone and consultation CTA.

---

# PAGE 1 — RIEŠENIA

Route:

```text
/riesenia
```

## Purpose

Give the visitor a clear overview of what AXIS can solve and provide obvious paths into detailed service pages.

The page should feel more like an engineering solutions overview than a product catalogue.

---

## Hero

Use the Riešenia mockup in `docs/redesign/`.

Suggested content hierarchy:

Eyebrow/breadcrumb:

```text
Domov > Riešenia
```

Headline:

```text
Naše riešenia
```

Supporting message:

Communicate that AXIS designs and delivers energy solutions tailored to commercial and industrial operations.

Use verified service language from `legacy/`.

CTA:

```text
NEZÁVÄZNÁ KONZULTÁCIA
```

Use a strong real project / industrial energy image from legacy.

---

## Main solution cards

The mockup shows four main solution areas.

Use only areas that AXIS can factually support.

Expected areas may include:

```text
Fotovoltické elektrárne
Batériové systémy
Energetické riadenie
LED osvetlenie
```

If "Batériové systémy" is not currently supported by source material, do not invent detailed claims. Either:

- adapt the card to a verified AXIS service
- or keep only verified solution categories

Each solution card should contain:

- icon
- title
- short explanation
- 3–4 concise capabilities
- `ZISTIŤ VIAC →`

The cards should link to a relevant detail route when available.

At minimum wire:

```text
Fotovoltické elektrárne -> /riesenia/fotovoltika
Energetické riešenia    -> /riesenia/energeticke-riesenia
LED osvetlenie           -> /riesenia/led-osvetlenie
```

If detailed pages are not yet implemented, the routes may temporarily resolve to a simple placeholder page or existing relevant section, but links must not be broken.

---

## Process section

Use the same general process language as homepage:

```text
01 Analýza
02 Návrh riešenia
03 Realizácia
04 Uvedenie do prevádzky
05 Servis a optimalizácia
```

Desktop:
horizontal sequence on deep navy.

Mobile:
vertical timeline.

---

## Why AXIS

Use concise differentiators such as:

- skúsenosti
- odbornosť
- komplexnosť
- dôvera

Use only claims that can be supported.

---

## Final CTA

Use the shared consultation CTA component.

---

# PAGE 2 — REFERENCIE

Route:

```text
/referencie
```

## Purpose

This page should be one of the strongest sales pages on the site.

The visitor should quickly see:

- real projects
- real photography
- real measured values
- real client outcomes

Quantitative proof is more important than long descriptive copy.

---

## Hero

Eyebrow/breadcrumb:

```text
Domov > Referencie
```

Headline:

```text
Referencie
```

Supporting copy:

```text
Skutočné projekty. Reálne úspory. Overené výsledky.
```

Then one short paragraph explaining the portfolio.

Use a real AXIS project photograph.

---

## Filters

Add filter controls for the verified categories.

Expected UI:

```text
VŠETKY
FOTOVOLTIKA
ENERGETICKÉ RIEŠENIA
LED OSVETLENIE
```

Filtering must work client-side without reload.

Buttons should:

- expose active state
- be keyboard accessible
- remain usable on mobile
- wrap or horizontally scroll cleanly if necessary

Do not create categories with no actual references.

---

## Reference grid

Create data-driven reference cards.

Each card should include, where factual data is available:

- category
- project/customer name
- project image
- 1–2 strongest metrics
- `POZRIEŤ PROJEKT →`

Examples from the existing design direction include metrics like:

```text
600 kWp
516 kW

121,38 kWp
97 kW

+180 %
€ 4 755 / rok
```

But use these only when confirmed by `legacy/`.

Never invent realistic-looking metrics.

Desktop:
3-column grid where appropriate.

Tablet:
2 columns.

Mobile:
1 column.

---

## Featured reference

The visual mockup includes one larger featured project.

Select the strongest real reference from `legacy/` that has:

- good imagery
- good quantitative data
- enough information to support a case-study style card

Use a larger full-width/2-column treatment.

If no single project supports enough verified content, omit this block rather than fabricate it.

---

## Reference detail routes

Where possible, wire reference cards to:

```text
/referencie/:slug
```

If the detail pages are not part of this implementation phase, create a reusable simple detail template using only verified legacy content.

Do not leave primary CTA links dead.

---

## KPI strip

Use the shared stats component where the underlying metrics are verified.

---

## Final CTA

Suggested:

```text
Máte podobný projekt?
```

CTA:

```text
DOHODNÚŤ KONZULTÁCIU
```

---

# PAGE 3 — O NÁS

Route:

```text
/o-nas
```

## Purpose

Build trust without pretending AXIS is a large employee-heavy organization.

The page should communicate:

- responsibility
- engineering competence
- experience
- trusted partnerships
- project coordination
- long-term service

---

## Hero

Breadcrumb:

```text
Domov > O nás
```

Headline:

```text
O nás
```

Use a concise positioning statement.

Do not use claims such as:

```text
"Sme tím desiatok odborníkov..."
```

unless explicitly verified.

Safer direction:

```text
Pomáhame firmám znižovať náklady na energiu pomocou technicky premyslených a overených riešení.
```

Use a real AXIS project image rather than people photography.

---

## Values / principles

Use four compact value blocks.

Suggested themes:

```text
Naším cieľom je výsledok
Spoľahlivosť a kvalita
Komplexné riešenia
Dlhodobé partnerstvá
```

---

## Company story / experience

Headline direction:

```text
Skúsenosti, ktoré prinášajú hodnotu
```

Write concise factual copy based on `legacy/`.

Do not invent founding dates or history.

Use a project / building / technology image.

---

## Why choose AXIS

Use a dark navy visual panel.

Potential verified themes:

- years of experience
- number of completed projects
- project coordination
- complete service
- focus on quality and safety

Any numeric claim must be verified first.

---

## Replace team section

There must be **NO employee portrait grid**.

Instead implement:

### NÁŠ PRÍSTUP

Headline:

```text
Ako pracujeme
```

Possible 6-step flow:

```text
1 Analýza a konzultácia
2 Návrh riešenia
3 Overení partneri
4 Realizácia projektu
5 Monitorovanie a optimalizácia
6 Servis a podpora
```

Explain clearly that project delivery may be coordinated with verified technology partners and subcontractors.

Desktop:
6 cards / process blocks.

Mobile:
vertical or 2-column compact process.

---

## Partners / technologies

Only show brand logos that are actually present and supported by `legacy/`.

Do not assume the logos appearing in the mockup are all real AXIS partners.

If partner relationships cannot be verified, change the section to a neutral technology/brands-used section or omit it.

---

## KPI strip

Only verified metrics.

---

# PAGE 4 — KONTAKT

Route:

```text
/kontakt
```

## Purpose

Make contacting AXIS extremely easy.

The page must support:

- consultation lead
- direct phone call
- email contact
- project inquiry

---

## Hero

Breadcrumb:

```text
Domov > Kontakt
```

Headline:

```text
Kontaktujte nás
```

Supporting copy:

```text
Máte otázky alebo záujem o nezáväznú konzultáciu?
Radi s vami prejdeme váš projekt.
```

Use a real relevant AXIS image.

Do not invent a photograph of an AXIS headquarters building if no such source image exists.

Use a solar / industrial / project image instead.

---

## Contact reassurance row

The mockup visually suggests small benefit blocks.

Only use factual/neutral wording.

Safe examples:

```text
Nezáväzná konzultácia
Riešenia na mieru
Technická konzultácia
Priamy kontakt
```

Do NOT promise:

```text
Odpovieme do 24 hodín
```

unless AXIS has explicitly confirmed this SLA.

---

## Company contact details

Read all data from legacy.

Display:

- company legal name
- address
- phone
- email
- company identifiers only if useful and available

Phone:

```html
<a href="tel:...">
```

Email:

```html
<a href="mailto:...">
```

---

## Map

Do not embed a fake map screenshot.

Use one of these approaches:

1. real embedded map only if already supported / acceptable
2. a lightweight location card with a "ZOBRAZIŤ NA MAPE" external link
3. OpenStreetMap embed if intentionally chosen

Keep dependencies minimal.

If exact address is uncertain, do not guess coordinates.

---

## Contact form

Fields:

```text
Meno a priezvisko*
Spoločnosť
E-mail*
Telefón
Oblasť záujmu*
Vaša správa*
```

Interest options should reflect verified services.

Example:

```text
Fotovoltika
Energetické riešenia
LED osvetlenie
Servis / iné
```

If battery systems are confirmed, include them.

---

## Form behavior

For this implementation phase:

- validate required fields client-side
- validate email format
- expose errors accessibly
- show loading/disabled state
- do not fake successful server delivery

If there is no backend endpoint:

On submit, clearly use a development behavior such as:

```text
console.log / local success demo state
```

and mark integration as TODO in code.

Do NOT claim the message was sent to AXIS when there is no backend.

Structure the form so a real API endpoint can be connected later.

---

## Privacy consent

Add a consent checkbox only if necessary for the form flow.

Link to the real privacy-policy route/document if available.

Do not invent legal copy beyond a minimal neutral consent statement.

---

## Direct call CTA

Use a dark navy call strip.

Headline direction:

```text
Nechcete čakať?
Zavolajte nám priamo
```

Use actual phone number.

Do not show invented business hours unless verified.

---

# Mobile requirements for all four pages

All four pages must be purposefully responsive.

At:

```text
375px
390px
430px
```

verify:

- no horizontal scrolling
- page hero stacks intentionally
- buttons become touch-friendly
- large desktop cards become 1-column
- filters remain usable
- process flows become vertical
- contact form becomes one column
- footer stacks cleanly
- no text smaller than comfortably readable
- project metrics remain visually prominent

At:

```text
768px
```

use intermediate tablet composition rather than jumping directly from mobile to desktop.

---

# Shared design tokens

Reuse the homepage tokens.

Approximate:

```text
Deep navy      #071B2D
Dark text      #0A1C2C
Electric lime  #C7E600
White          #FFFFFF
Soft bg        #F6F7F5
```

Do not introduce a separate color system for subpages.

---

# SEO metadata

Each route should have its own page title and description.

Suggested direction:

```text
Riešenia | AXIS Energy Solutions
Referencie | AXIS Energy Solutions
O nás | AXIS Energy Solutions
Kontakt | AXIS Energy Solutions
```

If there is already an SEO helper in `src_codex/`, reuse it.

---

# Acceptance criteria

## General

- [ ] all code is inside `src_codex/`
- [ ] legacy remains untouched
- [ ] shared header/footer are reused
- [ ] four routes work
- [ ] navigation between all routes works
- [ ] design is consistent with homepage
- [ ] no fabricated facts from mockups are presented as real
- [ ] real AXIS assets are reused where possible
- [ ] desktop layout closely follows supplied visual references
- [ ] mobile layouts are intentional
- [ ] no horizontal overflow
- [ ] build passes
- [ ] lint/typecheck passes where configured

## Riešenia

- [ ] main solution areas are data-driven
- [ ] "Zistiť viac" links work
- [ ] process section is responsive
- [ ] only verified service claims are used

## Referencie

- [ ] category filters work
- [ ] reference cards use real legacy data
- [ ] quantitative results are prominent
- [ ] no fake project metrics are introduced
- [ ] reference links do not lead to dead pages

## O nás

- [ ] no employee portraits
- [ ] no invented employee/team names
- [ ] subcontractor/partner delivery model is reflected appropriately
- [ ] process/approach replaces team section
- [ ] partner logos are shown only if verified

## Kontakt

- [ ] contact details come from legacy
- [ ] phone and email are clickable
- [ ] form is accessible
- [ ] responsive form works on mobile
- [ ] fake backend success is not presented as real
- [ ] map/location behavior uses real address data

---

# Implementation workflow

1. Read `docs/redesign/CODEX_IMPLEMENTATION.md`.
2. Inspect all relevant mockups in `docs/redesign/`.
3. Inspect `legacy/`.
4. Inspect the current implementation in `src_codex/`.
5. Summarize:
   - which legacy assets/data you found
   - which routes/components you will add
   - any visual mockup facts that could not be verified
6. Implement all four routes.
7. Reuse components instead of duplicating markup.
8. Run the app and inspect desktop/mobile behavior.
9. Run build/lint/typecheck.
10. Fix all errors.

Do not stop after scaffolding.

The four pages should be polished enough to navigate as a coherent website proposal together with the homepage.
