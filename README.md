# ZF2 App Skeleton
> Skeleton application for ZF2 MVC projects

## Einführung

Dies ist ein Gerüst für Zend Framework 2 basierte Anwendungen, die auf dem MVC-Layer des Zend Frameworks aufsetzen. Grundlage ist die ZendSkeletonApplication des Zend Frameworks, die an einigen Punkten modifiziert und an eigene Bedürfnisse angepasst wurde.

## Installation

### Download

```bash
$ git clone git@github.com:dwolke/Zf2AppSkeleton.git
```

### Installation mit Composer

```bash
$ cd Zf2AppSkeleton
$ composer update
```

Webserver Setup

```
<VirtualHost *:80>
	
	ServerName your.website.com
    ServerAdmin you@website.com
    DocumentRoot /pfad/zum/webverzeichnis/Zf2AppSkeleton/public

    ErrorLog /var/log/apache2/zfapp-error.log
    CustomLog /var/log/apache2/zfapp-access.log common

    <Directory "/pfad/zum/webverzeichnis/Zf2AppSkeleton/public">
        Require all granted
        AllowOverride All
    </Directory>

</VirtualHost>
```



## Kontakt

#### Daniel Wolkenhauer/dwLabs

* Homepage: [dw-labs.de](http://dw-labs.de)
* e-mail: [hello@dw-labs.de](hello@dw-labs.de)

---
Copyright © 2012 - 2019 by dwLabs. Alle Rechte vorbehalten. 😎
