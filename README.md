# Sheets

A web-based Dungeons & Dragons 5e character sheet manager and campaign tool. Players can build and track characters; runners (DMs) can manage combat, view all sheets, and oversee sessions.

Built with Laravel 12, Blade, and Tailwind CSS. Fully responsive — optimised for both desktop and mobile.

---

## Features

### Character Builder
- Step-through creation: choose species, class, and background, then assign ability scores
- Automatically calculates ability modifiers, saving throw proficiencies, and spell slots
- Skill proficiency selection (class- and background-gated, with per-class pick limits)
- Draft system — characters are saved as drafts until finalised

### Character Sheet
- Full stat block: ability scores, modifiers, saving throws, skill proficiencies
- Hit point tracking (current, max, temporary)
- Armour class, initiative, proficiency bonus, inspiration
- Class features and species traits
- Spell slot tracking with long rest recovery
- Actions and attack rolls

### Combat Tracker
- Initiative rolling and manual entry
- Add enemies and NPCs to the tracker
- Damage and healing for players and enemies mid-combat
- Turn order management

### Spellbook
- Browse the full spell list with filters by class, school, and components
- Per-character known spells
- Cast spells directly from the spellbook (tracks slot expenditure)

### Inventory
- Browse weapons, armour, tools, and equipment
- Per-character inventory management

### Notes
- Create rich notes with colour themes
- Player-scoped (players see their own; runners and admins see all)
- Export functionality

### User Roles
| Role | Access |
|------|--------|
| **Player** | Own characters, own notes, spellbook, inventory |
| **Runner** | All characters, all notes, combat management |
| **Admin** | Full access including user management |

---

## Requirements

- PHP 8.2+
- Composer
- Node.js & npm
- SQLite (default) or MySQL / PostgreSQL

---

## Installation

```bash
# 1. Clone the repository
git clone <repo-url>
cd sheets

# 2. Install PHP dependencies
composer install

# 3. Install Node dependencies
npm install

# 4. Configure environment
cp .env.example .env
php artisan key:generate

# 5. Run migrations and seed reference data
php artisan migrate
php artisan db:seed

# 6. Build front-end assets
npm run build
```

### Development server

```bash
composer run dev
```

This starts the Laravel dev server, queue worker, and Vite HMR concurrently.

---

## Environment

Key variables to configure in `.env`:

| Variable | Description |
|----------|-------------|
| `APP_URL` | Full URL of your installation |
| `APP_ENV` | `local` for development, `production` for live |
| `APP_DEBUG` | `true` locally, **`false` in production** |
| `DB_CONNECTION` | `sqlite` (default), `mysql`, or `pgsql` |
| `DB_DATABASE` | Path to SQLite file, or database name for MySQL/Postgres |
| `SESSION_LIFETIME` | Session timeout in minutes |

For MySQL or PostgreSQL, uncomment and fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` fields.

---

## Seeded Data

`php artisan db:seed` populates:

- All 12 core classes (Barbarian through Wizard) with spell slots, skill options, and proficiency counts
- All standard skills linked to their governing ability scores
- All 6 ability score statistics
- All standard spells with class lists
- Species, backgrounds, and starting equipment options

User accounts must be created manually (or add a `UserSeeder` for local development).

---

## Deployment Notes

- Set `APP_DEBUG=false` and `APP_ENV=production` in your production `.env`
- Run `php artisan config:cache` and `php artisan route:cache` after deploying
- Run `npm run build` to compile production assets
- Ensure `storage/` and `bootstrap/cache/` are writable by the web server
- For SQLite: ensure `database/database.sqlite` is writable

---

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 |
| Language | PHP 8.2+ |
| Database | SQLite / MySQL / PostgreSQL |
| Frontend | Blade + Tailwind CSS 4 |
| Asset bundler | Vite 6 |
| Responsive | riverskies/laravel-mobile-detect |
