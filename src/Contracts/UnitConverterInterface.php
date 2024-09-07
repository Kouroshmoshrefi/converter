<?php

namespace Sunstrike\Converter\Contracts;

interface UnitConverterInterface
{
    public function from(string $unit): self;
    public function to(string $unit): float|int;
}