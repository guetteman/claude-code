---
paths:
  - "**/*.php"
---

## Collection Higher Order Messages

Use higher order messages when calling a single method or accessing a property on each collection item. This syntax is more concise and readable than closures for simple operations.

**Preferred:**
```php
$users->each->markAsVip();
$users->sum->votes;
$users->filter->is_active;
$users->sortBy->created_at;
```

**Avoid:**
```php
$users->each(fn ($user) => $user->markAsVip());
$users->sum(fn ($user) => $user->votes);
$users->filter(fn ($user) => $user->is_active);
$users->sortBy(fn ($user) => $user->created_at);
```