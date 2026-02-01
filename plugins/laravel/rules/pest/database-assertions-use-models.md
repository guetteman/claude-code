## Database Assertions: Use Model Classes

Use model class names instead of table name strings in `assertDatabase*` methods when a model exists.

**Preferred:**
```php
assertDatabaseHas(User::class, ['email' => 'test@example.com']);
```

**Avoid:**
```php
assertDatabaseHas('users', ['email' => 'test@example.com']);
```

String table names are acceptable for pivot tables without dedicated models.