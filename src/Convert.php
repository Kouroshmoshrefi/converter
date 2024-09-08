<?php

namespace Sunstrike\Converter;

use Sunstrike\Converter\Length\LengthConverter;
use Sunstrike\Converter\Weight\WeightConverter;

final class Convert
{
    private function __construct(){}

    public static function weight(float $value): WeightConverter
    {
        return new WeightConverter($value);
    }

    public static function lenght(float $value): LengthConverter
    {
        return new LengthConverter($value);
    }
}