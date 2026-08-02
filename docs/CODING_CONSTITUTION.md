# Napoleon Bikes Platform
# Coding Constitution

Version: 1.0

Status: FINAL

---

# Purpose

This document is the highest-priority engineering document for the Napoleon Bikes Platform.

If any other document conflicts with this one,

THIS DOCUMENT WINS.

Every developer and every AI assistant must read this document before making changes.

---

# Core Mission

Build a production-grade motorcycle platform that is

- Reliable
- Maintainable
- Scalable
- Secure
- Performant
- Beautiful

without accumulating technical debt.

---

# The Ten Golden Rules

## Rule 1

Never duplicate code.

If code appears twice,

it must become reusable.

---

## Rule 2

One file

One responsibility.

---

## Rule 3

Business logic

never belongs inside

HTML

CSS

Views

Templates

---

## Rule 4

Every page must reuse

shared components.

Never create page-specific duplicates.

---

## Rule 5

Every feature must improve the architecture.

Never reduce maintainability.

---

## Rule 6

Every asset has exactly one location.

No duplicate assets.

---

## Rule 7

Never hardcode

colors

spacing

URLs

paths

configuration

Everything comes from shared sources.

---

## Rule 8

Security first.

Every input

validated

sanitized

escaped.

---

## Rule 9

Performance first.

Lazy loading

Reusable CSS

Reusable JS

Optimized assets

Minimal DOM

---

## Rule 10

If uncertain,

refactor

instead of patching.

---

# Development Order

Blueprint

↓

Architecture

↓

Foundation

↓

Components

↓

Pages

↓

Backend

↓

Optimization

↓

Testing

↓

Deployment

Never skip steps.

---

# Architecture Rules

Controllers

↓

Services

↓

Repositories

↓

Database

Views never access database.

Controllers never execute SQL.

Repositories never generate HTML.

---

# CSS Rules

Single Design System

Single Color Palette

Single Typography System

Single Grid System

Single Animation System

No duplicated selectors.

No duplicated variables.

---

# JavaScript Rules

Every feature

Module

↓

Import

↓

Initialize

No global variables.

No duplicated listeners.

No duplicated animations.

---

# Component Rules

Everything reusable becomes

a component.

Examples

Navbar

Footer

Buttons

Cards

Forms

Gallery

Statistics

Testimonials

FAQ

Newsletter

CTA

Loader

Never recreate components.

---

# Database Rules

Prepared Statements

Foreign Keys

Indexes

UTF8MB4

Validation

Transactions when required

No inline SQL.

---

# Security Rules

Prepared Statements

Escape Output

CSRF Protection

Secure Cookies

HTTPS

Environment Variables

No secrets inside repository.

---

# Documentation Rules

Every architecture change updates

ARCHITECTURE.md

Every UI change updates

DESIGN_SYSTEM.md

Every database change updates

DATABASE.md

Every reusable component updates

COMPONENT_LIBRARY.md

---

# AI Rules

Before generating code

AI must

Read

PROJECT_RULES.md

ARCHITECTURE.md

DESIGN_SYSTEM.md

COMPONENT_LIBRARY.md

CODING_STANDARDS.md

SECURITY_GUIDELINES.md

This document

Only then generate code.

---

# Definition of Success

Every feature must satisfy

✔ Zero duplicate code

✔ Zero duplicate CSS

✔ Zero duplicate JS

✔ Responsive

✔ Accessible

✔ Secure

✔ SEO Friendly

✔ Fast

✔ Reusable

✔ Documented

✔ Tested

✔ Production Ready

---

# Non-Negotiable Principle

The Napoleon Bikes Platform is engineered,

not assembled.

Every decision must increase

quality,

consistency,

reliability,

maintainability,

and scalability.

Nothing is merged unless it satisfies this constitution.
