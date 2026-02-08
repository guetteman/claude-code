---
name: start-new-feature
description: Starts a new feature in a new branch. Use when the user asks to create a new feature, build something new, or says "new feature", "start feature", or "let's build". Creates a feature branch, enters plan mode, interviews the user, validates with experts, and saves the spec.
---

# Start New Feature

Follow every step below in order. Do not skip any step.

## Step 1: Create the feature branch

- Derive `<feature-name>` from the user's request as a concise, hyphenated slug.
- Create and checkout the branch using the naming convention `feature/<feature-name>`.

```bash
git checkout -b feature/<feature-name>
```

## Step 2: Enter plan mode

- Use the `EnterPlanMode` tool to switch into plan mode.
- Begin drafting the implementation plan inside the plan file.

### Plan structure

Organize the plan in phases. Each phase must include:

- **Goal** — what the phase achieves.
- **Deliverables** — concrete outputs (files, migrations, tests, etc.).
- **Steps** — ordered implementation steps within the phase.

## Step 3: Interview the user

- Invoke the `interview` skill (`/interview`) to conduct an in-depth technical interview.
- Use the interview to clarify requirements, edge cases, UI/UX decisions, and technical tradeoffs.
- Incorporate all answers and decisions back into the plan.

## Step 4: Validate with expert agents

Once a first version of the plan exists, validate it by launching **all four** agents in parallel using the `Task` tool:

1. **Laravel Architect** (`subagent_type: "laravel"`) — review architecture, patterns, and Laravel conventions.
2. **Pest TDD Expert** (`subagent_type: "laravel:pest-tdd-expert"`) — review testing strategy, coverage, and TDD approach.
3. **Laravel Security Reviewer** (`subagent_type: "laravel:laravel-security-reviewer"`) — review for security vulnerabilities and OWASP concerns.
4. **Pest Browser Testing** (`subagent_type: "laravel:pest-browser-testing"`) — review browser/E2E testing strategy, UI interaction coverage, and accessibility checks.

Provide each agent with the full plan text and ask for feedback.

After collecting feedback from all three agents:

- Incorporate valid suggestions into the plan.
- If any agent raises a blocker, resolve it and re-validate that specific concern.

## Step 5: Finalize and exit plan mode

- Ensure the plan is complete with all phases, goals, deliverables, and steps.
- Use `ExitPlanMode` to present the plan to the user for approval.

## Step 6: Save the spec

After the user approves the plan:

- Create the `specs/` directory if it does not exist.
- Write the finalized plan to `specs/<feature-name>.md`.
