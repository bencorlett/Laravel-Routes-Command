To install this package, simply add `'JeffreyWay\RoutesCommand\RoutesCommandServiceProvider'` to your list of service provdiers in `app/config/app.php`.

That's it! From the Terminal, run `php artisan routes` to view all of your app's registered routes.

![routes command](https://github.com/bencorlett/Laravel-Routes-Command/blob/master/img/routes.png)

The output is separated into three columns:

- __URI__ - HTTP method and route
- __Name__ - Is a named route associated?
- __Action__ - Which method (or closure) is responsible for this route?
