---
paths:
  - "app/Models/**/*.php"
---

## Local Scopes

Create local scopes using the `#[Scope]` attribute for reusable query logic within Eloquent models.

**Preferred:**
```php
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

#[Scope]
protected function forUser(Builder $query, int $userId): Builder
{
    return $query->where('user_id', $userId);
}
```

**Avoid:**
```php
use Illuminate\Database\Eloquent\Builder;

protected function scopeForUser(Builder $query, int $userId): Builder
{
    return $query->where('user_id', $userId);
}
```