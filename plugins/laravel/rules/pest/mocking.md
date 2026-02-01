## Mocking in Pest Tests

Use Pest's `mock()` function instead of `$this->mock()` or `test()->mock()` for creating container-bound mocks.

**Preferred:**
```php
use function Pest\Laravel\mock;

mock(SomeService::class, function ($mock) {
    $mock->shouldReceive('method')->andReturn('value');
});
```

**Avoid:**
```php
// Don't use $this->mock()
$this->mock(SomeService::class, function ($mock) {
    $mock->shouldReceive('method')->andReturn('value');
});

// Don't use test()->mock()
test()->mock(SomeService::class, function ($mock) {
    $mock->shouldReceive('method')->andReturn('value');
});
```

### Exceptions

`Mockery::mock()` is acceptable in these specific cases:

1. **Overload mocks** - Pest's `mock()` doesn't support overload:
   ```php
   Mockery::mock('overload:' . SomeClass::class);
   ```

2. **Simple object mocks not bound to container** (e.g., unit tests injecting mocks via constructor):
   ```php
   $connector = Mockery::mock(SomeConnector::class);
   $service = new SomeService($connector);
   ```

The Pest `mock()` function provides a cleaner API and automatically binds to Laravel's container.
