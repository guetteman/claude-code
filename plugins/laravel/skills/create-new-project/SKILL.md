---
name: create-new-project
description: Creates a new Laravel project from scratch. Use when the user ask to create a new project.
---

## Questions you need to ask
You ask these questions in very simple terms and one by one:

- If the user doesn't tell you the project name, ask about it.
- Ask if the user wants to install authentication flow. In case they don't want it, add `--no-authentication` to `laravel new` command.
- Ask the user if they have paid for Laravel Herd.

## Your Task

You must follow the next steps to create a new Laravel project:

- Run `laravel new {{project_name}} --git --react --database={{selected_database}} --npm --boost --pest`
- In the project directory create a new `herd.yml` file:
```yaml
name: {{project_name}}
php: '8.4'
secured: true
aliases: {  }
services:
  postgresql:
    version: '17'
    port: '${DB_PORT}'
  redis:
    version: 7.0.0
    port: '${REDIS_PORT}'
integrations:
  forge: {  }
```
- Run `herd init`
- Tell the user that close the current claude code session, navigate to the project directory, and open a new claude code session there to start working on the new project.

## Notes
- If the user hasn't paid for Laravel Herd, DON'T add the services section to the `herd.yml` file.
- If the user hasn't paid for Laravel Herd, replace {{selected_database}} with `sqlite` in the `laravel new` command, otherwise, replace it with `pgsql`.