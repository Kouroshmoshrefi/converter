<?php

use Sunstrike\Converter\WeightConverter;

test('Test converting weights: Kilograms to Pounds', function () {
    $pounds = WeightConverter::value(10000)->fromKilograms()->toPounds();
    expect($pounds)->toBeFloat();
    expect($pounds)->toEqual(22046);
});

test('Test converting weights: Pounds to Kilograms', function () {
    $kilos = WeightConverter::value(22046)->fromPounds()->toKilograms();
    expect($kilos)->toBeFloat();
    expect($kilos)->toEqual(10000);
});
