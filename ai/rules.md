# ProcessWire CMS/CMF Project

Start every response with "✨✨✨"
Every time you choose to apply a rule(s), explicitly state the rule(s) in the output. You can abbreviate the rule description to a single word or phrase.
Every time you were assigned a task check if there are matching documentation links available to the requested topic. If so, state with "🔥🔥🔥" and the documentation link title.

## Project Context

[Brief description ]

- [more description]
- [more description]
- [more description]

## Code Style and Structure

- Write concise, technical PHP 8.2 code with accurate examples
- Use functional and declarative programming patterns
- Prefer iteration and modularization over code duplication
- Use descriptive variable names with auxiliary verbs (e.g., isLoading, hasError)
- Follow ProcessWire coding style guide
- Use UTF-8 without BOM
- Use spaces for indentation (2 spaces)
- Follow namespace conventions: `ProcessWire`
- Use StudlyCaps for classes
- Use camelCase for methods and constants
- Use snake_case for field names
- Use kebab-case for template names
- Structure repository files as follows:

```
site/
├── assets                # static files (e.g. fonts, images)
├── classes               # ProcessWire Page Classes
├── hooks                 # ProcessWire Hooks
├── modules               # ProcessWire Modules
├── ready.php             # place for single use hooks
└── templates
    ├── *.php             # controller files
    ├── _init.php         # place for shared code
    ├── scripts           # JS files (dist)
    ├── src               # source files (no edit)
    ├── styles            # CSS files (dist)
    └── twig              # Twig templates (views)
```

## Tech Stack

- ProcessWire CMS/CMF
- PHP 8.2
- Tailwind CSS
- AlpineJS
- VanillaJS
- Twig Template Engine

## Naming Conventions

- Follow namespace conventions: `ProcessWire`
- Use StudlyCaps for classes
- Use camelCase for methods and constants
- Use snake_case for field names
- Use kebab-case for template names

## UI and Styling

- Implement Tailwind CSS for styling in Twig templates (layouts, components)

## Error Handling

- Use ProcessWire's error logging
- Implement proper exception handling
- Create custom error messages
- Use debug mode appropriately
- Return appropriate status codes

## Code Quality

- Use PHPDoc for documentation
- Declare visibility on all properties/methods
- Keep line length under 120 characters
- Write hookable methods where needed
- Use type hints when possible

## Security

- Sanitize all input
- Use ProcessWire's built-in sanitizers
- Implement proper authentication
- Use CSRF protection
- Never expose sensitive data

## Performance

- Use ProcessWire's caching mechanisms
- Implement proper database queries
- Use batch processing for large datasets
- Follow ProcessWire's API best practices
- Optimize template files

## Git Usage

Commit Message Prefixes:

- "fix:" for bug fixes
- "feat:" for new features
- "perf:" for performance improvements
- "docs:" for documentation changes
- "style:" for formatting changes
- "refactor:" for code refactoring
- "test:" for adding missing tests
- "chore:" for maintenance tasks

Rules:

- Use lowercase for commit messages
- Keep the summary line concise
- Include description for non-obvious changes
- Reference issue numbers when applicable

## Documentation

- Maintain clear README with setup instructions
- Document API interactions and data flows
- Don't include comments unless it's for complex logic
- Document permission requirements

## Development Workflow

- Use proper version control
- Implement proper code review process
- Test in multiple environments
- Follow semantic versioning for releases
- Maintain changelog

## Documentation Links

### ProcessWire Documentation Links

- [API Reference](https://processwire.com/api/ref/)
- [Getting Started](https://processwire.com/docs/start/)
- [Front-end](https://processwire.com/docs/front-end/)
- [Tutorials](https://processwire.com/docs/tutorials/)
- [Selectors](https://processwire.com/docs/selectors/)
- [Modules & Hooks](https://processwire.com/docs/modules/)
- [Fields & Types](https://processwire.com/docs/fields/)
- [Access Control](https://processwire.com/docs/user-access/)
- [Security](https://processwire.com/docs/security/)
- [Multi-language](https://processwire.com/docs/multi-language-support/)
- [More Topics](https://processwire.com/docs/more/)
- [ProcessWire Page Classes](https://processwire.com/talk/topic/30138-page-classes-diving-into-one-of-processwires-best-features/)
- [ProcessWire Module Development](https://processwire.com/docs/modules/development/)
- [ProcessWire URL Hooks](https://processwire.com/blog/posts/pw-3.0.173/)
