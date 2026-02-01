---
paths:
  - "tests/**/*.php"
---

## Test File Location

For feature tests, mimic the path of the file being tested within the `tests/Feature` directory.

**Preferred:**
- Testing `app/Http/Controllers/UserController.php` with `tests/Feature/Http/Controllers/UserControllerTest.php`

**Avoid:**
- Testing `app/Http/Controllers/UserController.php` with `tests/Feature/UserControllerTest.php`