# Resume

## Setup
### Install SASS via brew
```bash
brew install sass/sass/sass
```

### Ensure PHP is installed
```bash
brew install php
```

## Build
### Convert SASS to CSS
Use `--watch` flag for incremental builds while developing.
```bash
sass resources/assets/sass/main.scss public/assets/css/main.css [--watch]
```

### Build HTML from Template
Fill in the environment vars and run the PHP script, storing the output as an HTML file.
```bash
export RESUME_LOCATION=
export RESUME_EMAIL=
export RESUME_PHONE=
php resources/templates/index.php > public/index.html
```
