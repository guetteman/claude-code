# Laravel Plugin for Claude Code

A Claude Code plugin for PHP and Laravel developers. This plugin provides agents, skills, and coding rules tailored for Laravel development.

## Installation

```bash
# Add the marketplace
/plugin marketplace add guetteman/claude-code

# Install the plugin
/plugin install laravel@guetteman
```

## Features

### Agents

#### laravel-architect
A senior Laravel software architect following Taylor Otwell's philosophy: *"Code should be like Kenny from South Park, not T1000 from Terminator—disposable, easy to change."*

Use when designing features, reviewing architecture decisions, or when you need guidance on "the Laravel way."

#### pest-tdd-expert
An elite TDD specialist using Pest PHP. Activates for writing tests, implementing features with TDD, running test suites, architecture testing, and mutation testing. Follows the sacred RED-GREEN-REFACTOR cycle.

#### laravel-security-reviewer
Reviews Laravel code for security vulnerabilities and best practices.

### Skills

#### /code-review
Reviews code against all project rules. Spawns parallel agents to check each rule file and provides a summary of violations with fix suggestions.

#### /create-new-project
Creates a new Laravel project from scratch with Herd integration. Guides you through project setup including authentication preferences and Herd configuration.

#### /start-new-feature
Starts a new feature in a dedicated branch following the `feature/<feature-name>` convention. Activates plan mode, conducts an interview, validates the plan with architect, TDD, and security agents, then saves the spec to `specs/`.

#### /interview
Conducts in-depth technical interviews about implementation plans before coding begins. Helps refine and validate your approach by exploring edge cases, failure modes, and tradeoffs.

#### /copy-rules
Copies the plugin's rules to your project's `.claude/rules` directory. A convenient alternative to manually copying or symlinking rules.

#### /init-project
Initializes your Laravel project with a Makefile, PHPStan (via Larastan), Pint, and Rector configuration files. Runs formatting and static analysis after setup.

### Rules

This plugin includes opinionated coding rules organized by category:

#### Laravel Rules
- `accessors-mutators` - Prefer attribute casting over accessors/mutators
- `api-resource-resolution` - API resource resolution patterns
- `arrayable-iterations` - Iterating over Arrayable objects
- `class-imports` - Import conventions
- `collection-higher-order-messages` - Use higher-order messages for simple operations
- `database-transactions` - Database transaction best practices
- `form-request-authorization` - Form request authorization patterns
- `local-scopes` - Eloquent local scope conventions
- `resource-collections` - API resource collection patterns
- `single-action-controllers` - When to use invokable controllers

#### Pest Rules
- `assert-database-empty` - Database emptiness assertions
- `avoid-and-modifier` - Avoid the `and()` modifier
- `chained-higher-order-expectations` - Chain expectations elegantly
- `database-assertions-use-models` - Use models in database assertions
- `factory-count-syntax` - Factory count syntax preferences
- `factory-relationships` - Factory relationship patterns
- `higher-order-expectations` - Use higher-order expectations
- `magic-factory-relationships` - Magic factory relationship methods
- `minimize-refresh-usage` - Minimize model refresh calls
- `mocking` - Mocking best practices
- `test-file-location` - Test file organization
- `use-pest-functions` - Use Pest standalone functions instead of `$this->` method calls
- `use-test-function` - Use `test()` over `it()`

#### PHP Rules
- `array-destructuring` - Array destructuring conventions

#### Filament Rules
- `enum-options` - Enum options in Filament forms

#### Git Rules
- `commits` - Commit message conventions

## Important: Manual Rules Setup

**Current Limitation:** Claude Code plugins do not yet support automatic distribution of rules. The rules included in this plugin will not be automatically applied to your projects.

To use the rules, you need to manually copy them to your project's `.claude/rules` directory:

```bash
# Copy all rules to your project
cp -r ~/.claude/plugins/marketplaces/guetteman/plugins/laravel/rules/* /path/to/your/project/.claude/rules/

# Or copy specific categories
cp -r ~/.claude/plugins/marketplaces/guetteman/plugins/laravel/rules/laravel/* /path/to/your/project/.claude/rules/laravel/
cp -r ~/.claude/plugins/marketplaces/guetteman/plugins/laravel/rules/pest/* /path/to/your/project/.claude/rules/pest/
```

Alternatively, you can symlink the rules directory if you want to keep them in sync:

```bash
ln -s ~/.claude/plugins/marketplaces/guetteman/plugins/laravel/rules /path/to/your/project/.claude/rules
```

## Create Your Own Rules

**These rules reflect my personal preferences and coding style.** They are not universal truths or official Laravel conventions. Your preferences may differ, and that's perfectly fine.

I encourage you to:

1. **Review the rules** before using them. Read through each rule file to understand what it enforces.

2. **Modify rules** that don't match your style. Edit the markdown files to reflect your team's conventions.

3. **Delete rules** you disagree with. If a rule doesn't make sense for your project, remove it.

4. **Create your own rules** based on patterns you want to enforce. 

5. **Share your rules** with your team by committing them to your project's `.claude/rules` directory.

## Contributing

Found a bug or have a suggestion? Feel free to open an issue or submit a pull request.

## License

MIT