
all: dist-mywptheme-css

dist-mywptheme-css: scss/mywptheme.scss
	mkdir -p dist/css
	`npm bin`/node-sass scss/mywptheme.scss > dist/css/mywptheme.css

clean:
	@echo "To be implemented"

echo:
	@echo "CC:$(CC), CFLAGS:$(CFLAGS), LDFLAGS:$(LDFLAGS), CFILE:$(CFILE), LINT:$(LINT_MODE)"

lint:
	@echo "To be implemented"
