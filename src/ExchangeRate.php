<?php

declare(strict_types=1);

namespace App;

class ExchangeRate
{
    private string $date;
    private string $idValue;
    private int $value;

    public function __construct(string $date, string $idValue, int $value)
    {
        $this->date = $date;
        $this->idValue = $idValue;
        $this->value = $value;
    }
}