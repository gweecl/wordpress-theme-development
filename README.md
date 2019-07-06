# wordpress-theme-development

## Timber Starter Theme

* To use [Starter Theme](https://github.com/timber/starter-theme). Install and replace all the necessary files in this directory.
* Take note of the files related to Laravel Mix. Keep them if you need.

## Compiling Assets

* This project make use of [Laravel Mix](https://laravel.com/docs/master/mix)
* Assets will be compile into `dist` directory.
* Assets loading using `mix` method available with the helpers functions. Refer to [./lib/theme-helpers.php](./lib/theme-helpers.php).

## Install Theme

Clone the repo into `wp-content/theme` directory:
```
cd PATH_TO_YOUR_WORDPRESS
git clone YOUR_REPO_URL wp-content/themes/YOUR_THEME_DIR
```
