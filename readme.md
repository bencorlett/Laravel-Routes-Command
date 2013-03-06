To use this command, add the file to your Laravel `app/commands` directory, and register it within `app/start/artisan.php`.

```php
Artisan::add(
  new RoutesCommand($app->router->getRoutes()->all())
);
```

That's it! From the Terminal, run `php artisan routes` to view all of your app's registered routes.

![routes command](https://github.com/JeffreyWay/laravel-routes-command/raw/master/img/routes.png)
