---
name: code-review
description: Review code against project rules. Use when reviewing code quality or ensuring compliance with conventions.
---

## Context

- Rule files: !`find .claude/rules -name "*.md" -type f ! -path ".claude/rules/git/*"`
- Git status: !`git status --porcelain`
- Current branch: !`git branch --show-current`
- Branch diff vs master: !`git diff --name-only master...HEAD 2>/dev/null || echo ""`

## Your task

Check code against ALL rule files listed above. Launch ONE agent PER rule file, in PARALLEL.

### Determine what to check

1. If file with line range provided (e.g., `file.php:10-50`): check only those lines
2. If file path provided (e.g., `file.php`): check the entire file
3. If no arguments: use git status and branch diff above to find changed files
4. If no changes found: use AskUserQuestion to ask what to check

### For each rule file, spawn a Task agent

Use `subagent_type: Explore` with prompt:

```
Check this code against the rule.

RULE: {rule_file_path}
RULE CONTENT:
{read the rule file content}

FILES TO CHECK:
{list of files, filtered by rule's paths: frontmatter if present}

Report violations as:
- file:line - violation description
  Code: `violating code`
  Fix: `correct code`

If no violations, report: PASS
```

### Verify completeness

After spawning agents, verify:
1. Count the rule files listed in Context above
2. Count the agents you spawned
3. If counts don't match, identify which rules were missed and spawn agents for them

### Summarize results

After all agents complete, output:
- Rules checked (count) / Total rules (count)
- Rules passed (count)
- Violations found per rule with file:line and fix suggestions