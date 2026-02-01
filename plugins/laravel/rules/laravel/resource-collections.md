---
paths:
  - "app/Http/Controllers/**/*.php"
---

## Resource Collections

When returning multiple models from a controller, use `toResourceCollection()` to ensure consistent Inertia responses.

**Preferred:**
```php
$conversation->messages->toResourceCollection()
```

**Avoid:**
```php
MessageResource::collection($conversation->messages)
```