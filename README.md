# ZF App Skeleton
> Skeleton application for ZF MVC projects



## Introduction

This is a skeleton application using the Zend Framework MVC layer and module system. It is designed to help you get a Zend Framework Application up and running quickly. This skeleton is based on the original [ZendSkeletonApplication](https://github.com/zendframework/zendskeletonapplication) of the Zend Framework, but has been extended in some places and adapted to my own needs.



## What's included?

- Gulp build system - a sample build script provides the following features:
  - SASS (SCSS) compilation
  - CSS minification
  - JS minification [TBD]
  - ...
- Bootstrap v4.3.1
- jQuery v3.4.1
- Zend Developer Tools - configured to run only in development environment



## Installation

### 1. Install Dependencies

- Node.js - [Install from here](https://nodejs.org).
- Gulp - `npm install -g gulp-cli`
- PHP 5.6 / 7.0 or later



### Download/Checkout the App Skeleton

```bash
$ git clone git@github.com:dwolke/ZfAppSkeleton.git /path/to/your/project
```



### Install Packages

```bash
$ cd /path/to/your/project
$ npm install
$ composer update
```



###Webserver Setup

Sample configuration for an apache web server

```
<VirtualHost *:80>
	
	ServerName your.website.com
	ServerAdmin you@website.com
	DocumentRoot /path/to/your/AppSkeleton/public
	
	// set an environment variable for development
	SetEnv APP_ENV development
	
	ErrorLog /var/log/apache2/zfapp-error.log
	CustomLog /var/log/apache2/zfapp-access.log common
	
	<Directory "/path/to/your/AppSkeleton/public">
		Require all granted
		AllowOverride All
	</Directory>

</VirtualHost>
```



## Changelog

`1.0.0` - September 5, 2019

- It work's. Initial release


## Contributors

#### Daniel Wolkenhauer/dwLabs

* Homepage: [dw-labs.de](http://dw-labs.de)
* e-mail: [hello@dw-labs.de](hello@dw-labs.de)

---
Copyright © 2012 - 2019 by dwLabs. All Rights Reserved. 😎
