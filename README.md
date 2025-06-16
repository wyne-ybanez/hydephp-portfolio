# HydePHP Portfolio

I've wanted to rewrite my Next.js portfolio into PHP for a long while.

This portfolio is built through HydePHP. See the documentation and learn more at https://hydephp.com/docs

Live site: https://wyne-ybanez.github.io/hydephp-portfolio/

&nbsp;

## Getting Started - Run locally

> See [Installation Guide](https://hydephp.com/docs/1.x/installation) and [Getting Started](https://hydephp.com/docs/1.x/getting-started) for the full details.

1. `npm install && composer install`

2. `cp .env.example .env` - obviously write into your .env as suits you

3. `php hyde build`

4. `php hyde serve`

Go to `localhost:8080`

&nbsp;

## Production

Shortcut: `hyde build --run-prod`

&nbsp;

## Features

### Built-in Frontend

- Hyde comes with a TailwindCSS starter kit, so you can start making content right away.
- The starter kit is fully responsive, has a dark mode theme, and is customizable.
- The frontend is accessible to screen-readers and rich with semantic HTML and microdata.
- Hyde also fills in and creates content like navigation menus and sidebars automatically.

### Asset Managing

- The Hyde starter comes with [HydeFront](https://github.com/hydephp/hydefront) to serve the base stylesheet and JavaScript through the jsDelivr CDN.
- Hyde ships with precompiled and minified TailwindCSS styles in the app.css file, you can also load them through the CDN.
- This means that all the styles you need are already installed. However, if you want to customize the included Tailwind config, or if you add new Tailwind classes through Blade files, you can simply run the `npm run dev` command to recompile the styles using the pre-configured Laravel Mix package.

&nbsp;

## Documentation Focus

Since the site is documentation focused, the output directory will be the root directory for the docs of this project. The root directory is `_site`. Normally it would go under `_site/docs` but again, this site is documetation focused so this has been changed.

```php
'output_directories' => [
        \Hyde\Pages\HtmlPage::class => '',
        \Hyde\Pages\BladePage::class => '',
        \Hyde\Pages\MarkdownPage::class => '',
        \Hyde\Pages\MarkdownPost::class => 'posts',
        \Hyde\Pages\DocumentationPage::class => '', // changed to '' instead of 'docs'
      ],
```

&nbsp;

## Framework expectations

- After you run the `php hyde build` command to compile your static site, it will save your HTML files in the `_site` directory and output them through `_site`.
- Hyde Documentation pages are files stored in the `_docs` directory
- The filename is used as the filename for the compiled HTML
- Filenames should use `kebab-case-name` format, followed by the appropriate extension
- Files prefixed with `_underscores`are ignored by Hyde
- You should always have an `index.md` file in the `_docs/` directory

&nbsp;

## Shortcut Commands

You can scaffold blog post files using the `php hyde make:post` command which automatically creates the front matter, based on your input selections. You can also scaffold pages with the `php hyde make:page` command.

Examples:

```bash
php hyde make:page "Page Title" --type="docs"

php hyde make:post

php hyde make:page --blade
```

| Argument/Option   | Description                                                                |
| ----------------- | -------------------------------------------------------------------------- |
| `title`           | The name of the page file to create. Will be used to generate the filename |
| `--type=markdown` | The type of page to create (`markdown`, `blade`, or `docs`)                |
| `--blade`         | Create a Blade page                                                        |
| `--docs`          | Create a Documentation page                                                |
| `--force`         | Overwrite any existing files                                               |

&nbsp;

## Useful Info

Once installed, you can access the HydeCLI from the project root using the hyde command.

`php hyde info`

Creating static websites with HydePHP is incredibly easy. First you need some content. You can just drop Markdown files in any of the source directories, or let Hyde scaffold the files for you using one of the many commands.

```bash
php hyde make:post "My First Post"
php hyde make:page "About Me"
```

Once you have some content, you can run the build command to compile the content into beautiful static HTML.

`php hyde build`

That's it.

&nbsp;

## Partials

In `markdown.php` enable these settings:

```
'allow_html' => true,
'enable_blade' => true,
```

These will allow us to edit the markdown with raw html or raw blade code. Hence, we can then reference partial files under `_docs/_partials` through:

```
[Blade]: {{ Hyde\Markdown\Models\Markdown::fromFile(DocumentationPage::sourcePath('_partials/_appearance'))->toHtml($page::class) }}
```

&nbsp;

## Advanced

Reveal Hyde components and layouts

```bash
php hyde publish:views components
php hyde publish:views layouts
```

These should then be revealed in `resources/views/vendor/hyde/`
