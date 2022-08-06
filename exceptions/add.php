<?php

declare(strict_types=1);

class Operation
{
    public function sum($a, $b): float
    {
        if (! is_numeric($a) || ! is_numeric($b)) {
            throw new InvalidArgumentException("\nInsert real values.");
        }

        return $a + $b;
    }
}

class Add extends Operation
{
    public function addition($x, $y)
    {
        try {
            return $this->sum($x, $y);
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }
}

echo (new Add)->addition(3, 8); // 11
echo (new Add)->addition("d", "f"); // Insert real values.
