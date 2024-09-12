<?php

namespace Sunstrike\Converter;

use Sunstrike\Converter\Length\LengthConverter;
use Sunstrike\Converter\Pressure\PressureConverter;
use Sunstrike\Converter\Weight\WeightConverter;

final class Convert
{
    private function __construct(){}

    public static function weight(float $value): WeightConverter
    {
        return new WeightConverter($value);
    }

    public static function length(float $value): LengthConverter
    {
        return new LengthConverter($value);
    }

    public static function pressure(float $value): PressureConverter
    {
        return new PressureConverter($value);
    }
}