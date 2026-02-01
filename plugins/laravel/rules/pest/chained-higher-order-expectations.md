---
paths:
  - "tests/**/*.php"
---

## Chain Higher Order Expectations

When making multiple assertions on the same object, chain them on a single `expect()` call using Higher Order Expectations.

**Preferred:**
```php
expect($glossary)
    ->projects->toHaveCount(1)
    ->projects->contains($otherProject)->toBeTrue()
    ->projects->contains($project)->toBeFalse();
```

**Avoid:**
```php
expect($glossary)->projects->toHaveCount(1);
expect($glossary)->projects->contains($otherProject)->toBeTrue();
expect($glossary)->projects->contains($project)->toBeFalse();
```

Chaining keeps related assertions together and makes the test subject clear throughout.