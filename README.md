# Slimvc - Slim Framework 3 MVC

Slimvc is a Slim Framework 3 skeleton application based on [Slim-Skeleton](https://github.com/slimphp/Slim-Skeleton), 
Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application with MVC structure built. 

- The latest Slim 3 Framework. 
- PHP-View template renderer.
- Twig-View template renderer
- Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project terrylinooo/slimvc [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is writeable.
* Ensure `template_cahce/` is writeable. This directory is for template engine `Twig` cahced files.

To run the application in development, you can run these commands 

	cd [my-app-name]
	php composer.phar start

Run this command in the application directory to run the test suite

	php composer.phar test


