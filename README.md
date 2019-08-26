ZfMailerApp
=======================

Testanwendung für [ZfMailer](https://github.com/dwolke/ZfMailer).

## Installation

### Download

```bash
$ git clone git@github.com:dwolke/ZfMailerApp.git
```

### Installation mit Composer

```bash
$ cd ZfMailerApp
$ composer update
```

Webserver Setup

```
<VirtualHost *:80>
	
	ServerName your.website.com
    ServerAdmin you@website.com
    DocumentRoot /pfad/zum/webverzeichnis/zfmailerapp/public

    ErrorLog /var/log/apache2/zfmailerapp-error.log
    CustomLog /var/log/apache2/zfmailerapp-access.log common

    <Directory "/pfad/zum/webverzeichnis/zfmailerapp/public">
        Require all granted
        AllowOverride All
    </Directory>

    # Falls PHP via FPM eingerichtet ist (dringend empfohlen!!!)
    <FilesMatch \.php$>
        SetHandler "proxy:fcgi://127.0.0.1:9000"
    </FilesMatch>

</VirtualHost>
```



## Kontakt

#### Daniel Wolkenhauer/dwLabs

* Homepage: [dw-labs.de](http://dw-labs.de)
* e-mail: [hello@dw-labs.de](hello@dw-labs.de)

---
Copyright © 2012 - 2019 by dwLabs. Alle Rechte vorbehalten. 😎
