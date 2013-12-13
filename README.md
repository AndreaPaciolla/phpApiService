# PHP API Service

A simple php application bundled with php activerecord and slim framework by using composer. 

## Setup

### Context

```shell
⎋ php -v
PHP 5.4.9 (cli) (built: Aug 21 2013 01:12:03) Copyright (c) 1997-2013 The PHP Group
```

### Installation and configuration

Open the file activerecord.config.php in config/ folder and edit the following lines.
```shell
$cfg->set_connections(
  array(
    'development' => 'mysql://root@localhost/test',
    #'development' => 'mysql://root:root@localhost/test',
    #'test' => 'mysql://username:password@localhost/test_database_name',
    #'production' => 'mysql://username:password@localhost/production_database_name'
  )
);
```
You are ready to start by having a look to the examples.

## Sources

* http://www.phpactiverecord.org/
* http://www.slimframework.com/
