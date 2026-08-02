# Napoleon Bikes Platform
## Project Constitution

Version: 1.0

This document defines the engineering standards for the entire Napoleon Bikes Platform.

These rules are mandatory.

---

# 1. Philosophy

The project must be:

- Modular
- Scalable
- Secure
- Maintainable
- Reusable
- Responsive
- Accessible
- SEO Friendly

Every feature must improve maintainability rather than increase complexity.

---

# 2. General Rules

Never duplicate code.

Never duplicate CSS.

Never duplicate JavaScript.

Never duplicate HTML.

Never duplicate PHP logic.

Every reusable feature becomes a shared component.

One responsibility per file.

Follow the Single Responsibility Principle.

---

# 3. PHP Standards

Follow PSR-12.

Strict typing enabled.

Use namespaces where appropriate.

Never place SQL inside view files.

Never mix HTML and business logic.

Never echo HTML inside controllers.

Database access only through the data layer.

Use prepared statements only.

Never concatenate SQL strings.

---

# 4. CSS Standards

Mobile First.

Use CSS variables.

Never hardcode colors repeatedly.

Never use inline styles.

Every page imports shared design tokens.

Page-specific styles belong only in page files.

Component styles belong only in component files.

---

# 5. JavaScript Standards

ES6+

No global variables.

Every module must have one responsibility.

No duplicated event listeners.

No duplicated animations.

Never mix business logic with UI logic.

---

# 6. HTML Standards

Semantic HTML only.

Proper heading hierarchy.

Images require alt text.

Buttons must use button elements.

Forms must use labels.

Accessibility is mandatory.

---

# 7. Components

Every repeated UI becomes a component.

Examples:

Navbar

Footer

Buttons

Cards

Gallery

Testimonials

Hero

CTA

Forms

Modal

Newsletter

No duplicate components.

---

# 8. Naming Convention

Folders

lowercase

hyphen-separated

Files

lowercase

hyphen-separated

PHP Classes

PascalCase

Variables

camelCase

Constants

UPPER_CASE

---

# 9. Assets

Images

assets/images/

Videos

assets/videos/

CSS

assets/css/

JavaScript

assets/js/

Fonts

assets/fonts/

Icons

assets/icons/

Never store assets outside these folders.

---

# 10. Routing

One routing strategy.

Never hardcode URLs.

Use helper functions.

Every page must be accessible through centralized routing.

---

# 11. Database

PDO only.

Prepared statements only.

Foreign keys required.

Indexes where necessary.

UTF8MB4.

Soft deletes where appropriate.

---

# 12. Security

Escape output.

Validate input.

Sanitize input.

CSRF protection.

XSS prevention.

SQL Injection prevention.

No secrets inside repository.

Use environment variables.

---

# 13. Performance

Lazy loading.

Compressed images.

Deferred JavaScript.

Minimal DOM depth.

Reusable CSS.

Reusable JS.

No duplicated assets.

---

# 14. Git Workflow

Feature branches only.

Small commits.

Descriptive commit messages.

Never commit broken code.

---

# 15. Documentation

Every architecture change updates:

ARCHITECTURE.md

Every design change updates:

DESIGN_SYSTEM.md

Every database change updates:

DATABASE.md

---

# 16. Definition of Done

A feature is complete only if:

✔ No duplication

✔ Mobile responsive

✔ Accessible

✔ SEO friendly

✔ Performance tested

✔ No console errors

✔ No PHP warnings

✔ No broken links

✔ Follows all project rules
