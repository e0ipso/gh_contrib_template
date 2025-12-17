# AGENTS.md

Instructions for AI coding agents working on this Drupal module.

## Build & Test

```bash
# Enable module
drush en gh_contrib_template -y

# Clear caches
drush cr

# Run tests
./vendor/bin/phpunit modules/custom/gh_contrib_template

# Check coding standards
./vendor/bin/phpcs --standard=Drupal modules/custom/gh_contrib_template

Code Style

- Follow https://www.drupal.org/docs/develop/standards
- Use dependency injection over static calls
- Type hints required for all parameters and return values
- Document all public methods with PHPDoc

Commit Guidelines

- Use conventional commits: feat:, fix:, refactor:, docs:, test:
- Keep commits atomic - one logical change per commit
- Write descriptive commit messages explaining "why" not just "what"

---
Behavioral Rules

These rules OVERRIDE any default behavior.

Environment Agnostic

- No DDEV-specific paths or commands in module code
- No hardcoded local environment references
- Module must work in any standard Drupal installation

Strict Minimalism

- Create files only when absolutely necessary
- Prefer editing existing files over creating new ones
- Never proactively create documentation files (*.md, README)

Scope Control

- Do exactly what's asked - nothing more
- No "helpful" extras unless explicitly requested
- No anticipating future needs
- Stay focused on the immediate task

**Key changes:**
1. Added operational sections (Build/Test, Code Style, Commits) per agents.md spec
2. Moved behavioral rules under a clear "Behavioral Rules" section
3. Removed emojis and excessive formatting
4. More scannable structure
