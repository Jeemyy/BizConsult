# BizConsult

![Status](https://img.shields.io/badge/status-active-brightgreen)
![License](https://img.shields.io/badge/license-MIT-blue.svg)

BizConsult is a Laravel-based business consulting platform that helps consultants and agencies manage clients, proposals, projects, and invoices. This repository contains backend and frontend scaffolding for the BizConsult web application.

**Quick links**
- **Project:** BizConsult
- **Repo file:** [README_BizConsult.md](README_BizConsult.md)

## Table of contents
- Overview
- Features
- Tech stack
- Installation
- Development
- Testing
- Deployment
- Contributing
- License & contact

## Overview

BizConsult provides a clean, opinionated experience to manage consulting workflows: client onboarding, proposal creation, project tracking, invoicing, and team collaboration. It ships with authentication, roles & permissions, and an admin dashboard.

## Features

- Client & contact management
- Proposal creation and tracking
- Project, milestones & task management
- Invoicing and payment tracking (integration-ready)
- Role-based access control (Admin / Manager / Consultant)
- Admin dashboard, activity log, and system settings

## Tech stack

- Backend: PHP 8+, Laravel
- Frontend: Blade + Tailwind CSS (optional Vue/React components)
- Database: MySQL / MariaDB (PostgreSQL supported)
- Queue: Redis or database
- Assets & build: Vite, npm

## Installation

Prerequisites:
- PHP 8.0+ and extensions
- Composer
- Node.js & npm
- MySQL / MariaDB or PostgreSQL

Install locally:

```bash
git clone <repo-url> bizconsult
cd bizconsult
composer install
cp .env.example .env
```

Configure and run:

```bash
php artisan key:generate
# update DB and other env values in .env
php artisan migrate --seed
npm install
npm run dev
php artisan storage:link
php artisan serve
```

## Development

- Modify `.env` for local credentials.
- Useful commands:
  - `php artisan migrate` — apply database migrations
  - `php artisan db:seed` — seed data
  - `php artisan queue:work` — start queue worker
  - `php artisan test` — run tests

Follow PSR-12 and existing code style. Open feature branches named `feature/*` and submit PRs against `main`.

## Testing

Run the test suite locally:

```bash
php artisan test
# or
vendor/bin/phpunit
```

## Deployment

Production tips:

- Cache config and routes: `php artisan config:cache && php artisan route:cache`
- Run migrations with `--force` during deploy
- Use Supervisor (or systemd) for queue workers
- Ensure write permissions for `storage` and `bootstrap/cache`

Example deploy steps:

```bash
git pull origin main
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache
php artisan route:cache
npm ci && npm run build
php artisan queue:restart
```

## Troubleshooting

- Check logs: `storage/logs/laravel.log`
- Ensure `storage` and `bootstrap/cache` are writable
- Rebuild assets if UI is broken: `npm run dev` or `npm run build`

## Contributing

Contributions are welcome. Workflow:

1. Fork and create a branch `feature/your-feature`.
2. Add tests for new behavior where applicable.
3. Open a PR with a clear description and screenshots if relevant.

Please adhere to existing code style and include changelog notes for user-facing changes.

## License & Contact

- License: MIT — see the [LICENSE](LICENSE) file.
- Maintainers: Project team
- Contact: open an issue or email `support@example.com`

## Acknowledgements

Built with Laravel and many open-source libraries. Thanks to all contributors.
