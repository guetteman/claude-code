---
paths:
  - "app/**/*.php"
---

## Database Transactions

Wrap multiple related database writes in a `DB::transaction()` to ensure data consistency. If any operation fails, all changes are rolled back.

**Preferred:**
```php
use Illuminate\Support\Facades\DB;

DB::transaction(function () use ($request, $invitation) {
    $user = User::create([
        'name' => $request->validated('name'),
        'email' => $invitation->email,
        'password' => Hash::make($request->validated('password')),
    ]);

    $invitation->markAsAccepted();

    Auth::login($user);
});
```

**Avoid:**
```php
$user = User::create([
    'name' => $request->validated('name'),
    'email' => $invitation->email,
    'password' => Hash::make($request->validated('password')),
]);

$invitation->markAsAccepted(); // If this fails, user is created but invitation not marked

Auth::login($user);
```