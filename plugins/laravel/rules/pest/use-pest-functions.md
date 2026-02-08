## Use Pest Standalone Functions

Use Pest's standalone functions instead of `$this->` method calls for Laravel testing helpers. These functions live in the `Pest\Laravel` namespace and require `use function` imports.

**Preferred:**
```php
use function Pest\Laravel\{actingAs, get, post, assertDatabaseHas};

actingAs($user)->get(route('dashboard'));
get(route('home'));
post(route('login'), ['email' => $email]);
assertDatabaseHas(Account::class, ['name' => 'Savings']);
```

**Avoid:**
```php
$this->actingAs($user)->get(route('dashboard'));
$this->get(route('home'));
$this->post(route('login'), ['email' => $email]);
$this->assertDatabaseHas(Account::class, ['name' => 'Savings']);
```

### Available functions

HTTP: `get`, `post`, `put`, `patch`, `delete`, `getJson`, `postJson`, `putJson`, `patchJson`, `deleteJson`
Auth: `actingAs`, `assertAuthenticated`, `assertGuest`, `assertCredentials`
Database: `assertDatabaseHas`, `assertDatabaseMissing`, `assertDatabaseCount`, `assertDatabaseEmpty`, `assertSoftDeleted`, `assertNotSoftDeleted`

### Import rules

- Add `use function Pest\Laravel\{function};` for each standalone function used in the file.
- Only import functions called directly — chained methods (e.g., `->get()` after `actingAs()`) don't need imports.
- Place `use function` imports after class `use` statements, separated by a blank line.
