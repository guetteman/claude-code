---
paths:
  - "tests/**/*.php"
---

## Pest Higher Order Expectations

Use Higher Order Expectations when asserting on object properties or method return values. Chain properties and methods directly to `expect()` instead of calling them inside `expect()`.

**Preferred:**
```php
expect($validator)->fails()->toBeTrue();
expect($validator)->errors()->first('name')->toBe('Required.');
expect($user)->name->toBe('Nuno');
expect(User::active())->get()->toHaveCount(3);
```

**Avoid:**
```php
expect($validator->fails())->toBeTrue();
expect($validator->errors()->first('name'))->toBe('Required.');
expect($user->name)->toBe('Nuno');
expect(User::active()->get())->toHaveCount(3);
```

This approach:
- Improves readability by making the expectation subject clearer
- Allows chaining multiple property/method assertions on the same object
- Follows Pest's philosophy of elegant, expressive test code