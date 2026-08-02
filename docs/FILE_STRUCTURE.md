# Napoleon Bikes Platform
# File Structure

Version: 1.0

---

# Root

Contains only configuration and project-level files.

---

# assets/

Static resources.

css/

Global styles

js/

JavaScript

images/

All images

videos/

All videos

fonts/

Fonts

icons/

SVG icons

---

# includes/

Shared PHP files.

config.php

Application configuration

database.php

Database connection

functions.php

Helper functions

head.php

HTML head

navbar.php

Navigation

footer.php

Footer

scripts.php

Global scripts

---

# includes/sections/

Homepage sections.

Every section is reusable.

---

# api/

API endpoints.

Never contains UI.

Returns JSON only.

---

# database/

SQL schema

Seed data

Migrations

---

# docs/

Engineering documentation.

---

# bikes/

Bike pages.

---

# pricing/

Pricing page.

---

# contact/

Contact page.

---

# book-test-ride/

Booking flow.

---

# thank-you/

Success page.

---

# screenshots/

Documentation screenshots only.

Never production assets.

---

# Rules

Every folder has one responsibility.

Every file has one responsibility.

No duplicate files.

No orphan files.

No unused assets.

No unused CSS.

No unused JavaScript.
