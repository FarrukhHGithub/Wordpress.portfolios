Android Dev Portfolio — WordPress theme
========================================

INSTALL
1. Zip this whole folder (if it isn't already a .zip).
2. In WP Admin: Appearance > Themes > Add New > Upload Theme.
3. Upload the .zip, then click Activate.
4. Go to Settings > Reading and set "Your homepage displays" to
   "A static page" if you want this to be the homepage, or just
   leave it — index.php shows the same layout either way.

EDIT THE CONTENT
All the portfolio copy (name, bio, skills, experience, projects,
contact links) lives in one file:

    template-parts/content-portfolio.php

Open it and edit the text directly — swap in your real name, roles,
project names/descriptions, and links. There's no database content
to manage, so editing this file is the whole workflow.

EDIT THE NAV
The site name shown in the header comes from Settings > General >
Site Title. To add real nav links, go to Appearance > Menus, create
a menu with sections/pages, and assign it to "Primary Menu" — until
you do, the theme falls back to on-page anchor links (Work/About/
Experience/Contact).

EDIT THE LOOK
Colors, type, and spacing are all CSS variables and rules at the top
of style.css (the --violet, --green, --ink variables control the
palette). No build step — it's plain CSS.

NOTES
- This is a lightweight, single-purpose theme (no widgets, blog
  templates, or WooCommerce support) — it's built to be a portfolio,
  not a general-purpose theme.
- Fonts (Space Grotesk / IBM Plex Sans / IBM Plex Mono) load from
  Google Fonts via functions.php.
