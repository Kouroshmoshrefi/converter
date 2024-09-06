<?php

namespace Sunstrike\Converter;

class WeightConverter
{
    private float $value = 0.0;
    private string $currentUnit = '';
    private string $convertUnit = '';

    private function __construct() {}

    public static function value(float|int $input): self {
        $instance = new self;
        $instance->value = floatval($input);
        return $instance;
    }

    public function calculateResult() : float {

        $action = $this->currentUnit.' to '.$this->convertUnit;
        
        if($this->currentUnit === $this->convertUnit) {
            return $this->value;
        }

        switch($action) {
            case 'kilograms to pounds': return floatval($this->value * 2.2046);
            case 'pounds to kilograms': return floatval($this->value / 2.2046);
            default: return 0.0;
        }

    }

    public function fromKilograms(): self {
        $this->currentUnit = 'kilograms';
        return $this;
    }
    public function fromPounds(): self {
        $this->currentUnit = 'pounds';
        return $this;
    }

    public function toKilograms(): float {
        $this->convertUnit = 'kilograms';
        return $this->calculateResult();
    }
    public function toPounds(): float {
        $this->convertUnit = 'pounds';
        return $this->calculateResult();
    }

}