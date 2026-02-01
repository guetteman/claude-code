---
paths:
  - "tests/**/*.php"
---

## Magic Factory Relationship Methods

Use Laravel's magic `has{Relationship}()` methods instead of the verbose `->has()` syntax.

**Preferred:**
```php
$user = User::factory()
    ->hasPosts(3, [
        'published' => false,
    ])
    ->create();
```

**Avoid:**
```php
$user = User::factory()
    ->has(Post::factory()->count(3)->state([
        'published' => false,
    ]))
    ->create();
```