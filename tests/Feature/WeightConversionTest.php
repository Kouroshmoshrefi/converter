<?php

use Sunstrike\Converter\Convert;

test('Test converting weights: Kilograms to Pounds', function () {
    $pounds = Convert::weight(10000)->from('kg')->to('lb');
    expect($pounds)->toBeNumeric();
});

test('Test converting weights: Pounds to Kilograms', function () {
    $kilos = Convert::weight(22046)->from('lb')->to('kg');
    expect($kilos)->toBeNumeric();
});
