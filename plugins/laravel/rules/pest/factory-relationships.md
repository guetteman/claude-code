## Factory Relationships: Use ->for() and ->has()

Use Laravel factory relationship methods instead of manually setting foreign keys.

**Preferred:**
```php
// BelongsTo relationships - use ->for()
PropertySource::factory()
    ->for($property)
    ->for($source)
    ->create(['last_seen_at' => now()]);

// HasMany relationships - use ->has()
Property::factory()
    ->has(PropertySource::factory()->for($source))
    ->create();
```

**Avoid:**
```php
// Don't manually set foreign keys
PropertySource::factory()->create([
    'property_id' => $property->id,
    'source_id' => $source->id,
]);
```

### Benefits

- More readable and expressive
- Leverages factory states and sequences
- Reduces coupling to database schema
- Easier to maintain when relationships change
