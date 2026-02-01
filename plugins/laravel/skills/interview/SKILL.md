---
name: interview
description: Conducts in-depth technical interviews about implementation plans. Use when the user wants to be interviewed about a plan, spec, or feature before implementation, or when they say "interview me" or "let's discuss the plan".
---

# Plan Interview Skill

Conduct a thorough technical interview to refine and validate an implementation plan before coding begins.

## Instructions

1. **Read the plan file** first to understand what's being proposed
2. **Use the AskUserQuestion tool** for all interview questions
3. **Ask about these areas** (in no particular order, adapt to context):
   - Technical implementation details
   - UI/UX decisions and user flows
   - Concerns and potential risks
   - Tradeoffs and alternatives considered

## Interview Guidelines

### Question Quality
- Avoid obvious questions that have clear answers in the plan
- Dig into edge cases, failure modes, and implicit assumptions
- Challenge decisions constructively to surface hidden complexity
- Ask "what if" scenarios to stress-test the design
- Probe for dependencies, performance implications, and security considerations

### Question Types to Use
- "What happens when..." (edge cases)
- "How would this handle..." (failure modes)
- "Why did you choose X over Y?" (tradeoffs)
- "What's the migration path if..." (future-proofing)
- "How will users discover/understand..." (UX depth)
- "What's the worst case scenario for..." (risk assessment)

### Interview Flow
1. Start with clarifying questions about the overall goal
2. Deep-dive into the most complex or risky parts first
3. Explore integrations with existing systems
4. Cover operational concerns (monitoring, debugging, rollback)
5. End with questions about success metrics and validation

### When to Stop
Continue interviewing until:
- All major technical decisions are validated
- Edge cases and failure modes are addressed
- The user feels confident about the approach
- No more non-obvious questions remain

## After the Interview

Once the interview is complete, write a detailed specification that incorporates:
- Original plan content
- Decisions made during the interview
- Edge cases and how they'll be handled
- Any open questions or future considerations
- Implementation notes and gotchas discovered

Save the spec to an appropriate location (ask the user where if unclear).
