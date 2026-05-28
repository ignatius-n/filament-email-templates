# Architecture Decisions Log

This log lists the architectural decisions made for the project.

## Laravel 13 Support (Option B)

**Date:** 2026-05-28

### Scope
- Add Laravel 13 compatibility to the Composer package.
- Loosen constraints for `illuminate/*` dependencies.
- Upgrade dev dependencies like `orchestra/testbench` to cover Laravel 13.
- Update documentation in README.md, STACK.md, and SPEC.md.

### Approach
- Chose Option B: Loosen constraints and document requirements, ensuring verification logic is prepared for Laravel 13.
- Rationale: Option B ensures we also look at verifying the package behaves correctly with testing setups.

