---
paths:
  - "tests/**/*.php"
---

## Use `test()` Instead of `it()`

Always use `test()` to define test cases, not `it()`.

**Preferred:**
```php
test('user can register', function () {
    // ...
});
```

**Avoid:**
```php
it('user can register', function () {
    // ...
});
```