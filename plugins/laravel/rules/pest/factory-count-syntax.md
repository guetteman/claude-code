---
paths:
  - "tests/**/*.php"
---

## Factory Count Syntax

Pass the count directly to `factory()` instead of chaining `count()`.

**Preferred:**
```php
$users = User::factory(3)->create();
```

**Avoid:**
```php
$users = User::factory()->count(3)->create();
```