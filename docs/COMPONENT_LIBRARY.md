# Napoleon Bikes Platform
# Component Library

Version: 1.0

---

# Purpose

This document defines every reusable UI component used throughout the Napoleon Bikes Platform.

No page may create its own version of these components.

If a component already exists, it must be reused.

---

# Component Philosophy

Every component must be:

- Reusable
- Responsive
- Accessible
- Lightweight
- Modular
- Documented

Every component must support:

- Desktop
- Tablet
- Mobile

---

# Component Naming

Component folders

PascalCase

Example

Hero/

Navbar/

Footer/

BikeCard/

Button/

Every component contains

HTML/PHP

CSS

JavaScript (if required)

Documentation

---

# Layout Components

## AppLayout

Purpose

Master layout wrapper.

Contains

Header

Footer

Main Content

Loader

Global Scripts

Used On

Every page.

---

## Section

Purpose

Standard content wrapper.

Contains

Heading

Description

Content

Spacing

Background

---

## Container

Purpose

Standard width container.

Widths

Small

Medium

Large

Full Width

---

# Navigation Components

## Navbar

Features

Transparent

Sticky

Glass Effect

Scroll Detection

Mega Menu Ready

Mobile Drawer

Search Ready

CTA Button

---

## Mobile Navigation

Slide Animation

Overlay

Auto Close

Keyboard Accessible

---

## Breadcrumb

Used On

Inner Pages

Example

Home

>

Bikes

>

Adventure X

---

# Hero Components

## Hero

Background

Image Slider

Video

Overlay

Heading

Subtitle

CTA

Scroll Indicator

Supports

Home

Pricing

Contact

Community

---

## Hero Slider

Features

Autoplay

Manual Controls

Touch Support

Lazy Loading

Fade Transition

---

# Buttons

## Primary Button

Filled

Rounded

Red

Hover Lift

---

## Secondary Button

Outlined

Transparent

---

## Ghost Button

Text Only

---

## Icon Button

Button + Icon

---

## Floating Action Button

Used For

Back To Top

Quick Contact

---

# Bike Components

## Bike Card

Contains

Image

Title

Category

Price

Engine

Power

Book Button

Hover Animation

---

## Bike Grid

Responsive

Desktop

Tablet

Mobile

---

## Bike Comparison Card

Future Ready

---

## Specification Table

Reusable

---

# Pricing Components

## Pricing Card

Contains

Plan Name

Price

Features

CTA

Highlight State

---

# Gallery Components

## Gallery Grid

Masonry

Lazy Loading

---

## Gallery Lightbox

Fullscreen

Keyboard Support

Touch Support

---

# Statistics Components

## Counter Card

Animated Counter

Icon

Title

Number

---

# Testimonial Components

## Testimonial Card

Photo

Name

Location

Review

Rating

---

## Testimonial Slider

Autoplay

Manual Navigation

Touch Support

---

# FAQ Components

## Accordion

Open One

Close Others

Keyboard Accessible

---

# Dealer Components

## Dealer Card

Image

Name

Location

Contact

Map Button

---

# CTA Components

## CTA Banner

Heading

Description

Button

Background

---

# Newsletter Components

## Newsletter Form

Email

Validation

Success State

Error State

---

# Form Components

## Text Input

Floating Label

Validation

Focus State

---

## Textarea

Auto Resize

Validation

---

## Select

Custom Dropdown

---

## Checkbox

Accessible

---

## Radio Button

Accessible

---

## Submit Button

Loading State

Disabled State

Success State

---

# Utility Components

## Loader

Fullscreen

Logo Animation

---

## Modal

Reusable

Close Animation

Overlay

Escape Support

---

## Toast Notification

Success

Warning

Error

Info

---

## Back To Top

Scroll Detection

Smooth Scroll

---

## Cookie Banner

Future Ready

---

# Footer Components

Contains

Logo

Links

Social

Newsletter

Copyright

---

# Empty State

Illustration

Heading

Description

CTA

---

# Error State

404

500

Network Error

Booking Failed

---

# Success State

Booking Success

Form Success

Contact Success

---

# Animation Rules

Hover

200ms

Click

150ms

Reveal

400ms

Page Transition

500ms

No animation should delay usability.

---

# Accessibility

Every component must support

Keyboard Navigation

ARIA Labels

Focus States

Screen Readers

High Contrast

---

# Reuse Rule

If a UI appears more than once,

it must become a component.

No exceptions.

---

# Future Components

Admin Dashboard

Dealer Portal

AR Viewer

Finance Calculator

Bike Configurator

Comparison Tool

Wishlist

User Profile

Blog Cards

Dealer Locator

These should integrate without changing the architecture.

---

# Definition of Complete Component

✔ Responsive

✔ Accessible

✔ Reusable

✔ Documented

✔ Tested

✔ No duplicate code

✔ Uses design tokens

✔ Uses shared spacing

✔ Uses shared typography

✔ Uses shared colors
