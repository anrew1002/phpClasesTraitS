<?php

namespace App\Database;

use App\Database\Database;


trait CashableTrait
{
    private $cashArray = [];
    private function cash($key, $value)
    {
        $this->cashArray[$key] = $value;
    }
    public function getCash($key)
    {
        return $this->cashArray[$key];
    }
}
