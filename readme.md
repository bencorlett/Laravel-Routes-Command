To use this command, add the `RoutesCommand.php` file to your Laravel `app/commands` directory, and register it within `app/start/artisan.php`.

```php
Artisan::add(
  new RoutesCommand($app->router->getRoutes()->all())
);
```

That's it! From the Terminal, run `php artisan routes` to view all of your app's registered routes.

![routes command](https://github.com/JeffreyWay/laravel-routes-command/raw/master/img/routes.png)

The output is separated into three columns:

- __URI__ - HTTP method and route
- __Name__ - Is a named route associated?
- __Action__ - Which method (or closure) is responsible for this route?
