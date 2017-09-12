# spark MVC example

## How to install ##

1. clone or download demo project
2. then: composer install
3. setup apache

#### apache ####

Enable rewrite mode:

```
a2enmod rewrite
```

Example of virtual host:

```
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

### Development mode ### 

<<<<<<< HEAD
From file  example/ExampleConfig.php remove two line (or remove @).  
=======
From file  example/ExampleConfig.php remove two lines  (or remove @).  
>>>>>>> 7be9c31297b258b11a3f639c5655864fd953cfe8

```php
 * @EnableApcuBeanCache(resetParam="reset")
 * @SmartyViewConfiguration(caching=true, forceCompile=false, compileCheck=false, cacheLifetime=3600)
```
