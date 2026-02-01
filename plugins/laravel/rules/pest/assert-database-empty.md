---
paths:
  - "tests/**/*.php"
---

## Database Empty Assertions

Use `assertDatabaseEmpty()` instead of `assertDatabaseCount(..., 0)`.

**Preferred:**
```php
assertDatabaseEmpty(GlossaryTerm::class);
```

**Avoid:**
```php
assertDatabaseCount(GlossaryTerm::class, 0);
```

For multiple sequential empty assertions, use `assertDatabaseEmptyMany()`:

**Preferred:**
```php
assertDatabaseEmptyMany([GlossaryTerm::class, Translation::class, Segment::class]);
```

**Avoid:**
```php
assertDatabaseEmpty(GlossaryTerm::class);
assertDatabaseEmpty(Translation::class);
assertDatabaseEmpty(Segment::class);
```