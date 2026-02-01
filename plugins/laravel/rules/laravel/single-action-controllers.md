---
paths:
  - "app/Http/Controllers/**/*.php"
  - "routes/**/*.php"
---

## Single-Action Controllers

Always create single action controllers for specific tasks instead of large, multi-action controllers.

**Preferred:**
```
Join\ShowJoinController
    __invoke()

Join\StoreJoinController
    __invoke()
```

```php
Route::get('/join', Join\ShowJoinController::class);
Route::post('/join', Join\StoreJoinController::class);
```

**Avoid:**
```
JoinController
    create()
    store()
```

```php
Route::get('/join', [JoinController::class, 'create']);
Route::post('/join', [JoinController::class, 'store']);
```