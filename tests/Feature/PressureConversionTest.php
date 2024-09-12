<?php

use Sunstrike\Converter\Convert;

test('Test converting pressure: Pascal to Bar', function () {
    $bars = Convert::pressure(100000)->from('pa')->to('bar');
    expect($bars)->toBeNumeric();
    expect($bars)->toEqual(1);
});

test('Test converting pressure: Bar to Pascal', function () {
    $pascal = Convert::pressure(1)->from('bar')->to('pa');
    expect($pascal)->toBeNumeric();
    expect($pascal)->toEqual(100000);
});
