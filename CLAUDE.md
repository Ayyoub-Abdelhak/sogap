# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Local Environment (Mac + MAMP)

- **App URL:** http://localhost:8888/yetiforce/
- **MySQL:** host `127.0.0.1`, port `8889`, user `root`, password `root`
- **MySQL binary:** `/Applications/MAMP/Library/bin/mysql80/bin/mysql`

## Importing a Database Backup

```bash
# Create DB if it doesn't exist
/Applications/MAMP/Library/bin/mysql80/bin/mysql -u root -proot -e \
  "CREATE DATABASE IF NOT EXISTS yetiforce CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

# Import the backup (replace filename as needed)
/Applications/MAMP/Library/bin/mysql80/bin/mysql -u root -proot yetiforce \
  < /Users/ayyoub/Downloads/backup_YYYY-MM-DD.sql
```

## JavaScript Edits

The browser loads `.min.js` files. After editing any `.js` file, copy it over the corresponding `.min.js`:

```bash
cp path/to/File.js path/to/File.min.js
```

There is no build pipeline — the copy is the deploy step.

## Debug Mode

Debug is intentionally enabled locally (`config/Debug.php`): `$EXCEPTION_ERROR_TO_SHOW = true` and `$DISPLAY_EXCEPTION_LOGS = true`. Do not disable unless testing prod behavior.

## Key Config Files

| File | Purpose |
|------|---------|
| `config/Main.php` | `$site_URL`, timezone, language, system mode |
| `config/Db.php` | DB host, port, credentials |
| `config/Security.php` | Security settings |
| `config/Performance.php` | Caching, query limits |

## Architecture Overview

YetiForce 6.4.0 is a fork of VtigerCRM. The codebase follows an MVC-like pattern:

- **`app/`** — Core business logic. Key namespaces: `\App\Db`, `\App\Cache`, `\App\TextParser`, `\App\Controller`
- **`modules/`** — One directory per CRM module (Accounts, Contacts, Calendar, etc.). Each module contains its own `models/`, `views/`, `actions/`, `handlers/`
- **`config/`** — Auto-generated PHP class files. Edit via Admin UI or directly; never commit credentials
- **`app/TextParser/`** — Custom PDF/document text parsers for French business documents (invoices, employee tables, etc.). This is where most custom development happens in this repo
- **`layouts/`** — Smarty templates and frontend assets
- **`vtlib/`** — Legacy VtigerCRM library layer (avoid modifying)
- **`webservice.php` / `api/`** — REST API entry point

## Custom Development in This Repo

Custom logic is primarily in `app/TextParser/` — PHP classes that extend `\App\TextParser\Base` to generate dynamic content in PDF exports (invoices, HR documents, purchase orders). When adding a new parser, follow the pattern of existing files like `FactureHeader.php` or `EmployeesTable.php`.
