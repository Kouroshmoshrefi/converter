# Unit convertor


## Overview
This is a library for converting any unit to another. All the units and their precission are costomizable just by updating units database. current version supports conversion for:
- Weight
- Length


## Insallation
You can install this package by running following composer command:
```sh
composer require sunstrike/converter
```

## Examples
Weight conversion:
```php
<?php

use Sunstrike/Converter/Convert;

$grams = Convert::weight(10)->from('kg')->to('g'); // 10,000 grams


```
Length conversion:
```php
<?php

use Sunstrike/Converter/Convert;

$miles = Convert::length(100)->from('km')->to('mi'); // 62.137 miles


```
Pressure conversion:
```php
<?php

use Sunstrike/Converter/Convert;

$miles = Convert::pressure(1)->from('bar')->to('pa'); // 100000 pascals


```