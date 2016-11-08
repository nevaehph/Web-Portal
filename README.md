# Software Parade - Web Portal
## Setting Up
Download this repo
Ensure that `composer` is installed and execute `composer update`
Ensure that `php` is installed and added to environment path
To start the server execute, `php artisan serve`

##Explaination of Folder Structure

###The App Directory

The app directory, as you might expect, contains the core code of your application. We'll explore this directory in more detail soon; however, almost all of the classes in your application will be in this directory.

####The Console Directory

The Console directory contains all of the custom Artisan commands for your application. These commands may be generated using the make:command command. This directory also houses your console kernel, which is where your custom Artisan commands are registered and your scheduled tasks are defined.


####The Events Directory

This directory does not exist by default, but will be created for you by the event:generate and  make:event Artisan commands. The Events directory, as you might expect, houses event classes. Events may be used to alert other parts of your application that a given action has occurred, providing a great deal of flexibility and decoupling.


####The Exceptions Directory

The Exceptions directory contains your application's exception handler and is also a good place to place any exceptions thrown by your application. If you would like to customize how your exceptions are logged or rendered, you should modify the Handler class in this directory.


####The Http Directory

The Http directory contains your controllers, middleware, and form requests. Almost all of the logic to handle requests entering your application will be placed in this directory.


####The Jobs Directory

This directory does not exist by default, but will be created for you if you execute the make:job Artisan command. The Jobs directory houses the queueable jobs for your application. Jobs may be queued by your application or run synchronously within the current request lifecycle. Jobs that run synchronously during the current request are sometimes referred to as "commands" since they are an implementation of the command pattern.


####The Listeners Directory

This directory does not exist by default, but will be created for you if you execute the event:generate or make:listener Artisan commands. The Listeners directory contains the classes that handle your events. Event listeners receive an event instance and perform logic in response to the event being fired. For example, a UserRegistered event might be handled by a SendWelcomeEmail listener.


####The Mail Directory

This directory does not exist by default, but will be created for you if you execute the make:mail Artisan command. The Mail directory contains all of your classes that represent emails sent by your application. Mail objects allow you to encapsulate all of the logic of building an email in a single, simple class that may be sent using the Mail::send method.


####The Notifications Directory

This directory does not exist by default, but will be created for you if you execute the  make:notification Artisan command. The Notifications directory contains all of the "transactional" notifications that are sent by your application, such as simple notifications about events that happen within your application. Laravel's notification features abstracts sending notifications over a variety of drivers such as email, Slack, SMS, or stored in a database.


####The Policies Directory

This directory does not exist by default, but will be created for you if you execute the make:policy Artisan command. The Policies directory contains the authorization policy classes for your application. Policies are used to determine if a user can perform a given action against a resource. For more information, check out the authorization documentation.


####The Providers Directory

The Providers directory contains all of the service providers for your application. Service providers bootstrap your application by binding services in the service container, registering events, or performing any other tasks to prepare your application for incoming requests.

In a fresh Laravel application, this directory will already contain several providers. You are free to add your own providers to this directory as needed.


###The Bootstrap Directory

The bootstrap directory contains files that bootstrap the framework and configure autoloading. This directory also houses a cache directory which contains framework generated files for performance optimization such as the route and services cache files.


###The Config Directory

The config directory, as the name implies, contains all of your application's configuration files. It's a great idea to read through all of these files and familiarize yourself with all of the options available to you.


###The Database Directory

The database directory contains your database migration and seeds. If you wish, you may also use this directory to hold an SQLite database.


###The Public Directory

The public directory contains the index.php file, which is the entry point for all requests entering your application. This directory also houses your assets such as images, JavaScript, and CSS.


###The Resources Directory

The resources directory contains your views as well as your raw, un-compiled assets such as LESS, SASS, or JavaScript. This directory also houses all of your language files.


###The Routes Directory

The routes directory contains all of the route definitions for your application. By default, three route files are included with Laravel: web.php, api.php, and console.php.

The web.php file contains routes that the RouteServiceProvider places in the web middleware group, which provides session state, CSRF protection, and cookie encryption. If your application does not offer a stateless, RESTful API, all of your routes will most likely be defined in the web.php file.

The api.php file contains routes that the RouteServiceProvider places in the api middleware group, which provides rate limiting. These routes are intended to be stateless, so requests entering the application through these routes are intended to be authenticated via tokens and will not have access to session state.

The console.php file is where you may define all of your Closure based console commands. Each Closure is bound to a command instance allowing a simple approach to interacting with each command's IO methods. Even though this file does not define HTTP routes, it defines console based entry points (routes) into your application.


###The Storage Directory

The storage directory contains your compiled Blade templates, file based sessions, file caches, and other files generated by the framework. This directory is segregated into app, framework, and logs directories. The app directory may be used to store any files generated by your application. The  framework directory is used to store framework generated files and caches. Finally, the logs directory contains your application's log files.

The storage/app/public directory may be used to store user-generated files, such as profile avatars, that should be publicly accessible. You should create a symbolic link at public/storage which points to this directory. You may create the link using the php artisan storage:link command.


###The Tests Directory

The tests directory contains your automated tests. An example PHPUnit is provided out of the box. Each test class should be suffixed with the word Test. You may run your tests using the phpunit or  php vendor/bin/phpunit commands.


###The Vendor Directory

The vendor directory contains your Composer dependencies.


##Files

###Controllers

`ClassroomController.php` - Displaying, adding, editing and deleting of classroom

`LoginController.php` - Handles User login

`ResultController.php` - Display Student's Score and his/her attempts

`TopicController.php` - Display Topic Stats

###Model

`Classroom.php` - Handles logic relating to Classroom

`Topic.php` - Handles logic relating to Topic

###Views
`template.blade.php` - Template UI for views

`dashboard.blade.php` - Web Portal Home Page

`login.blade.php` - Display login menu

`classroomManager.blade.php` - Display a list of classroom and options to edit/delete classroom

`performanceReport.blade.php` - Display Statistics based on Topics

`performanceReportDetail.blade.php` - Display detail statistics of topic

`classroom.blade.php` - Display Statistics based on Classroom

`studentScore.blade.php` - Display detail statistics of Student's score