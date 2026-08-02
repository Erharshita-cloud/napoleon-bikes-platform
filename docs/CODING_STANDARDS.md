# Napoleon Bikes Platform
# Coding Standards

Version: 1.0

---

# Purpose

This document defines the coding standards for the entire project.

Every file must follow these standards.

---

# PHP

- PHP 8.2+
- declare(strict_types=1);
- PSR-12 compliant
- One class per file
- One responsibility per class
- Use type hints
- Use return types
- Never suppress errors
- Never use global variables
- Never mix HTML with business logic

---

# HTML

- Semantic HTML5 only
- Proper heading hierarchy
- Labels for every form field
- Alt text for every image
- No inline styles
- No inline JavaScript

---

# CSS

- Mobile First
- CSS Variables
- BEM naming convention
- No !important
- No duplicated selectors
- No duplicated media queries
- Shared utilities only

---

# JavaScript

- ES6+
- Modular architecture
- No global variables
- const by default
- let only when necessary
- No duplicated event listeners
- Async/await preferred

---

# Naming

Folders

lowercase-hyphen

Files

lowercase-hyphen

Classes

PascalCase

Functions

camelCase

Variables

camelCase

Constants

UPPER_CASE

---

# Comments

Comment only when necessary.

Code should explain itself.

---

# Error Handling

Never ignore exceptions.

Always log errors.

Never expose internal errors to users.

---

# Documentation

Every major function must include

- Purpose
- Parameters
- Return value

---

# Git

Small commits.

Descriptive commit messages.

Never commit broken code.

---

# Quality Rules

Before merging:

□ No duplicate code

□ No warnings

□ No console errors

□ No dead code

□ No unused imports

□ No unused variables
