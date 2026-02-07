---
name: copy-rules
description: Copies rules from skill to the project. Use it when user asks you to copy the rules into the project.
---

## Your Task

You must follow the next steps to copy the rules from the skill to the project:

- Run `cp -r {{user_directory}}/.claude/plugins/marketplaces/guetteman/plugins/laravel/rules/* .claude/rules/`
    - The user directory is the directory where the user has their claude code sessions. You can find it by running `echo $HOME` in the terminal.
