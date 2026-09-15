# MERN Portfolio — WordPress Theme

A simple one-page WordPress theme for a MERN / Next.js full-stack developer
portfolio. No page builder or extra plugins needed — activate it and the
landing page is your homepage.

## Install

1. Zip the `mern-portfolio-wp` folder itself (if it isn't already a zip).
2. In wp-admin go to **Appearance → Themes → Add New → Upload Theme**.
3. Upload the zip and click **Activate**.

Or, if you have server/FTP access: copy the `mern-portfolio-wp` folder into
`wp-content/themes/`, then activate it from **Appearance → Themes**.

## Edit the content

Everything is in plain PHP, no admin setup required:

- **Hero, About, Contact text** — edit directly in `front-page.php`.
- **Stack pills** — edit the `$stack` array at the top of `front-page.php`
  (each item is a `name` and an accent `color`).
- **Projects** — edit the `$projects` array the same way (`index`, `title`,
  `description`, `tags`).
- **Site name / email** — search `front-page.php` and `header.php` for
  `Amir Khan` and `amir.dev@example.com` and replace with your own.
- **Colors, fonts, spacing** — all in `style.css` under `:root` at the top.

## File structure

```
mern-portfolio-wp/
├── style.css        → theme header + all styles
├── functions.php     → enqueues fonts & style.css
├── header.php        → <head> and top nav
├── footer.php        → footer and closing tags
├── front-page.php     → the landing page (hero, about, stack, projects, contact)
└── index.php          → required WordPress fallback template
```

`front-page.php` is used automatically as your homepage regardless of what
Settings → Reading is set to, so no extra configuration is required after
activating the theme.
