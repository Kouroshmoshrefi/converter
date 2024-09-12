<?php

namespace Sunstrike\Converter\Pressure;

use Sunstrike\Converter\Contracts\UnitConverterInterface;

final class PressureConverter implements UnitConverterInterface
{
    private readonly array $supported_units;
    private float $value = 0.0;

    public function __construct(float $value) {
        $this->supported_units = $this->loadUnits();
        $this->value = $value;
    }

    private function loadUnits(): array
    {
        return json_decode(file_get_contents(__DIR__ .'/units.json'), true) ?? [];
    }

    public function from(string $unit) : self {
        $unit = strtolower($unit);
        if(!isset($this->supported_units[$unit])) {
            throw new \InvalidArgumentException('Convertion from unit="'.$unit.'" is not supported');
        }
        $this->value = floatval($this->value * $this->supported_units[$unit]);
        return $this;
    }

    public function to(string $unit) : float|int {
        $unit = strtolower($unit);
        if(!isset($this->supported_units[$unit])) {
            throw new \InvalidArgumentException('Convertion to unit="'.$unit.'" is not supported');
        }
        return $this->value / $this->supported_units[$unit];
    }

}