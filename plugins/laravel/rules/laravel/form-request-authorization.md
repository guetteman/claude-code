---
paths:
  - "app/Http/Controllers/**/*.php"
  - "app/Http/Requests/**/*.php"
---

## Form Request Authorization

Extract route parameter validation and authorization logic from controllers into Form Request classes using `authorize()` and `failedAuthorization()`.

**Preferred:**
```php
// Form Request
class ShowInvitedRegistrationRequest extends FormRequest
{
    private ?Invitation $invitation = null;

    public function authorize(): bool
    {
        $this->invitation = Invitation::query()
            ->where('token', $this->route('token'))
            ->first();

        return $this->invitation !== null && $this->invitation->isPending();
    }

    protected function failedAuthorization(): void
    {
        throw new HttpResponseException(
            redirect()
                ->route('login')
                ->with('error', $this->invitation?->status->getErrorMessage() ?? 'Invalid.')
        );
    }

    public function invitation(): Invitation
    {
        return $this->invitation;
    }
}

// Controller
public function __invoke(ShowInvitedRegistrationRequest $request): Response
{
    $invitation = $request->invitation();
    // ...
}
```

**Avoid:**
```php
// Controller with inline validation
public function __invoke(string $token): Response
{
    $invitation = Invitation::query()
        ->where('token', $token)
        ->first();

    if (! $invitation || ! $invitation->isPending()) {
        return redirect()
            ->route('login')
            ->with('error', 'Invalid invitation.');
    }
    // ...
}
```