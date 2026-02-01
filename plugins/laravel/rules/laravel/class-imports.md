---
paths:
  - "**/*.php"
---

## Class Imports

Always import classes at the top of the file instead of using fully qualified names inline.

**Preferred:**
```php
use App\Models\User;
use Illuminate\Http\Request;

public function store(Request $request)
{
    $user = new User();
}
```

```php
use App\Models\Conversation;

/**
 * @mixin Conversation
 */
class ConversationResource extends JsonResource
{
}
```

**Avoid:**
```php
public function store(Request $request)
{
    $user = new \App\Models\User();
}
```

```php
/**
 * @mixin \App\Models\Conversation
 */
class ConversationResource extends JsonResource
{
}
```