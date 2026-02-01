---
paths:
  - "tests/**/*.php"
---

## Avoid the `->and()` Modifier

Avoid using the `->and()` modifier. When you encounter `->and()`, determine if the values are related or unrelated.

### Related values: Refactor to Higher Order Expectations

When testing multiple properties on the same object, chain them using [Higher Order Expectations](./higher-order-expectations.md).

**Avoid:**
```php
expect($user->name)->toBe('Nuno')
    ->and($user->email)->toBe('nuno@laravel.com');
```

**Preferred:**
```php
expect($user)
    ->name->toBe('Nuno')
    ->email->toBe('nuno@laravel.com');
```

### Unrelated values: Use separate `expect()` calls

When testing values that don't share a common object, use separate expectations.

**Avoid:**
```php
expect($id)->toBe(14)
    ->and($name)->toBe('Nuno');
```

**Preferred:**
```php
expect($id)->toBe(14);
expect($name)->toBe('Nuno');
```