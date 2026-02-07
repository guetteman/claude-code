.PHONY: help rector pint phpstan pest migrate-refresh format lint build pre-push refresh

# Default target
help:
	@echo "Available commands:"
	@echo "  make rector          - Run PHP Rector for automated code refactoring"
	@echo "  make pint            - Check PHP code style"
	@echo "  make phpstan         - Run PHPStan static analysis"
	@echo "  make pest            - Run all PHP tests with Pest"
	@echo "  make migrate-refresh - Migrate, refresh and seed the database"
	@echo "  make format          - Run prettier to format code"
	@echo "  make lint            - Run ESLint to lint JavaScript/TypeScript code"
	@echo "  make build           - Build front-end assets"
	@echo "  make pre-push        - Run all checks before pushing code"
	@echo "  make refresh         - Refresh environment"

# Run PHP Rector for automated code refactoring
rector:
	./vendor/bin/rector

# Check PHP code style
pint:
	./vendor/bin/pint

# Run PHPStan static analysis
phpstan:
	./vendor/bin/phpstan analyse --memory-limit=2G

# Run all PHP tests with Pest
pest:
	./vendor/bin/pest --bail --parallel

# Migrate, refresh and seed the database
migrate-refresh:
	php ./artisan migrate:fresh --seed

# Run prettier to format code
format:
	npm run format

# Run ESLint to lint JavaScript/TypeScript code
lint:
	npm run lint

# Build front-end assets
build:
	npm run build

# Run all checks before pushing code
pre-push: rector pint phpstan pest lint format

# Refresh environment
refresh: migrate-refresh build
