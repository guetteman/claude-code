---
paths:
  - "app/Filament/**/*.php"
---

## Use Enums for Status Options

Use PHP enums implementing `HasLabel` (and optionally `HasColor`) for status-like options in Filament components instead of hardcoded arrays.

**Preferred:**
```php
use App\Enum\InvitationStatusEnum;

SelectFilter::make('status')
    ->options(InvitationStatusEnum::class)
```

```php
Select::make('status')
    ->options(PropertyStatusEnum::class)
```

**Avoid:**
```php
SelectFilter::make('status')
    ->options([
        'pending' => 'Pending',
        'accepted' => 'Accepted',
        'expired' => 'Expired',
    ])
```