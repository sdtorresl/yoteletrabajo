# MaterializeTheme plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```{bash}
composer require sdtorresl/materialize-theme
```

## Configuration

Load the plugin in your `config/bootstrap.php` file:

```{php}
Plugin::load('MaterializeTheme', ['bootstrap' => false, 'routes' => false]);
```

To set the default bake template add the follow lines to `src/Application.php`:

```{php}
$this->addPlugin('MaterializeTheme');
```
