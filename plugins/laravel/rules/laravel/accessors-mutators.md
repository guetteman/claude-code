---
paths:
  - "app/Models/**/*.php"
---

## Accessors & Mutators

Use the modern `Attribute` class for defining accessors and mutators instead of the legacy `get{Attribute}Attribute` / `set{Attribute}Attribute` convention. Add `@property-read` PHPDoc annotations for read-only accessors.

**Preferred:**
```php
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * @return Attribute<string, never>
 */
protected function fullName(): Attribute
{
    return Attribute::make(
        get: fn (): string => $this->first_name . ' ' . $this->last_name,
    );
}

// With both getter and setter:

/**
 * @return Attribute<string, string>
 */
protected function fullName(): Attribute
{
    return Attribute::make(
        get: fn (): string => $this->first_name . ' ' . $this->last_name,
        set: fn (string $value): array => [
            'first_name' => explode(' ', $value, 2)[0],
            'last_name' => explode(' ', $value, 2)[1] ?? '',
        ],
    );
}
```

**Avoid:**
```php
public function getFullNameAttribute(): string
{
    return $this->first_name . ' ' . $this->last_name;
}

public function setFullNameAttribute(string $value): void
{
    $parts = explode(' ', $value, 2);
    $this->attributes['first_name'] = $parts[0];
    $this->attributes['last_name'] = $parts[1] ?? '';
}
```