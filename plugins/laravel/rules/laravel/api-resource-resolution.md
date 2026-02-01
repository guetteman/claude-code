---
paths:
  - "app/Http/Controllers/**/*.php"
---

## API Resource Resolution

Never resolve API Resources manually using `->resolve()`. The framework handles this automatically when returning resources from controllers.

**Preferred:**
```php
return new UserResource($user);
```

```php
$conversation->messages->toResourceCollection();
```

**Avoid:**
```php
return new UserResource($user)->resolve();
```

```php
$conversation->messages->toResourceCollection()->resolve();
```