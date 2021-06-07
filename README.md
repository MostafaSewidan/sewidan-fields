# Laravel package for form fields

## Installation

You can install the package via composer:

```bash
composer require mostafasewidan/sewidan-field
```

### Configuration file

Publish the configuration file

```bash
php artisan vendor:publish --provider="SewidanField\SewidanFieldServiceProvider"
```

## Usage

make field 
``` php
    /**
     * @param $name
     * @param $label
     * @param null $value
     * @param array $options
     * @return string
     */
    field()->text('name','label','value',[]);
```
