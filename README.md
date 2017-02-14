# BeContent PHP Framework
==================
BeContent PHP Framework is a new way of designing data-intensive web applications. It is not a Content Management System, it is not an emulation of PHP Nuke, it is not similar to Joomla. beContent is a Model Driven framework which allows you to design your own data and to generate the application around it. beContent is based on sound and formal foundations which are the result of the work which has been carried out by the he MDD/Software Engineering and Architecture group at the University of L'Aquila, Italy.

Which are the result of the work which has been carried out by the he MDD/Software Engineering and Architecture group at the University of L'Aquila , Italy. Eclipse beContent is endowed with a modeling platform implemented over Eclipse/EMF and which allows to specify a complex web application by means of simple coordinated models and to generate the corresponding application.

## Features

* 
    * 
    * 
* 
* Simple configuration

## Getting Started

### Install


### System Requirements

You need **PHP >= 5.3.0**.


date.timezone = Europe/Rome
extension=msql.so
extension=json.so

### Setup your web server

#### Apache

Ensure the `.htaccess` and `index.php` files are in the same public-accessible directory. The `.htaccess` file
should contain this code:

    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [QSA,L]

Additionally, make sure your virtual host is configured with the AllowOverride option so that the .htaccess rewrite rules can be used:

   AllowOverride All

#### Nginx
[Example LEMP Configuration ](https://gist.github.com/frenz/cc8d543c09a53534350d)

The nginx configuration file should contain this code (along with other settings you may need) in your `location` block:

    try_files $uri $uri/ /index.php?$args;

This assumes that BeContent's `index.php` is in the root folder of your project (www root).

#### HipHop Virtual Machine for PHP

Your HipHop Virtual Machine configuration file should contain this code (along with other settings you may need).
Be sure you change the `ServerRoot` setting to point to your BeContent app's document root directory.

    Server {
        SourceRoot = /path/to/public/directory
    }

    ServerVariables {
        SCRIPT_NAME = /index.php
    }

    VirtualHost {
        * {
            Pattern = .*
            RewriteRules {
                    * {
                            pattern = ^(.*)$
                            to = index.php/$1
                            qsa = true
                    }
            }
        }
    }

#### lighttpd ####

Your lighttpd configuration file should contain this code (along with other settings you may need). This code requires
lighttpd >= 1.4.24.

    url.rewrite-if-not-file = ("(.*)" => "/index.php/$0")

This assumes that BeContent's `index.php` is in the root folder of your project (www root).


## How to Contribute

### Pull Requests

1. Fork the BeContent PHP Framework repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the **develop** branch

It is very important to separate new features or improvements into separate feature branches, and to send a pull
request for each branch. This allows me to review and pull in new features or improvements individually.


### Twitter

Follow [@becontent](http://www.twitter.com/becontent) on Twitter to receive news and updates about the framework.

## Author


## License

The BeContent PHP Framework is released under the MIT public license.

<http://www.becontent.org/license>



##Website

Please visit the website for more information and documentation:

http://becontent.org

This source code is deployed live as a demo at: http://becontent.org


## Documentation:
<http://becontent.org/docs>



##C ontact Us

http://becontent.org//contact-us
