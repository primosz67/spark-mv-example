# sparkMVC example

## How to install ##

1. clone or download demo project
2. then: composer install
3. setup apache

#### apache ####

Enable rewrite mode:

```php
a2enmod rewrite
```

Example of virtual host:

```php
<VirtualHost *:80>
        ServerName example.com
        ServerAlias example.com
        DocumentRoot /var/www/project/

        <Directory "/var/www/project/">
                Options Indexes FollowSymLinks Includes ExecCGI
                AllowOverride All
                Order allow,deny
                Allow from all
                Require all granted
        </Directory>

</VirtualHost>
```


`