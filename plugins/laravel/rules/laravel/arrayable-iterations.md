---
paths:
  - "**/*.php"
---

## Arrayable Iteration

- Use `collect()` with collection methods instead of `foreach` loops.

**Preferred:**
```php
collect($items)
collect($items)->each(fn ($item) => $item->process());
collect($items)->map->name;
collect($items)->filter->isActive;
```

**Avoid:**
```php
foreach ($items as $item) {
    $item->process();
}
```