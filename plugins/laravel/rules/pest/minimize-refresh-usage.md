---
paths:
  - "tests/**/*.php"
---

## Minimize `->refresh()` Usage in Tests

Omit `->refresh()` by default. Only add it when a test fails without it.