# ACME PHP Proxy

This is the common package for all ACME PHP Proxy packages.

ACME PHP Proxy is a processing library for PHP and dns-01 Challenge of Lets Encrypt. It has been designed based on
ideas from [acmeproxy](https://github.com/mdbraber/acmeproxy).


## Installation

ACME PHP Proxy is installed via [Composer](https://getcomposer.org/).
For most uses, you will need to require `acmeproxy-php/acmeproxy-php-common` and an individual provider library:

```
composer require acmeproxy-php/acmeproxy-php-common
```

## Server

If you want a complete server based on Laravel Lumen look at [acmeproxy-php/acmeproxy-php]https://github.com/acmeproxy-php/acmeproxy-php
