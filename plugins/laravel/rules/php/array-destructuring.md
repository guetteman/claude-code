---
paths:
  - "**/*.php"
---

## Array Destructuring

When destructuring arrays, avoid leading or middle comma placeholders. Use explicit variable names for all elements instead.

**Preferred:**
```php
[$user, $team, $project] = owner();
[$user, $team] = owner();  // Trailing omission is fine
```

**Avoid:**
```php
[, $team, $project] = owner();
[$user, , $project] = owner();
[$_user, $team] = owner();
```

This makes it clear how many elements are being unpacked and what each position represents.