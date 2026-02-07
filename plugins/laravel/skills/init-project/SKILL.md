---
name: init-project
description: Initializes project with necessary files and structure. Use it when user asks to setup the project.
---

## Your Task

### Makefile
- Copy the `Makefile` to the project root.

### Pint
- Copy the `pint.json` file to the project root.
- Run pint to format the code: `./vendor/bin/pint`

### PHPStan
- Install larastan for PHPStan: `composer require --dev "larastan/larastan:^3.0"`
- Copy the `phpstan.neon` file to the project root.

### Rector
- Install rector: `composer require --dev rector/rector`
- Install rector laravel set: `composer require --dev driftingly/rector-laravel`
- Copy the `rector.php` file to the project root.

---

- Run `make pre-push` and fix any issues that arise until it passes without errors.