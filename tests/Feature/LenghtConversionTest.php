<?php

use Sunstrike\Converter\Convert;

test('Test converting lengths: Kilometers to Miles', function () {
    $miles = Convert::lenght(120)->from('km')->to('mi');
    expect($miles)->toBeNumeric();
});

test('Test converting lengths: Miles to Kilometers', function () {
    $kilometers = Convert::lenght(60)->from('mi')->to('km');
    expect($kilometers)->toBeNumeric();
});
