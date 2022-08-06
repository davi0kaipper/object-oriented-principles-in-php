<?php

declare(strict_types=1);

class Calculator
{
    public function sum(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtraction(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiplication(float $a, float $b): float
    {
        return $a * $b;
    }

    public function division(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new InvalidArgumentException("The divisor must not be 0.");
        }

        return $a / $b;
    }
}

class CalculatorTest
{
    public function execute(): void
    {
        $calc = new Calculator;

        echo "The sum between 1 and 3 equals " . $calc->sum(1, 3) . PHP_EOL;
        echo "The subraction between 5 and 2 equals " . $calc->subtraction(5, 2) . PHP_EOL;
        echo "The multiplication between 3 and 4 equals " . $calc->multiplication(3, 4) . PHP_EOL;

        try {
            echo "The division of 12 by 4 equals " . $calc->division(12, 4) . PHP_EOL;
            echo "The division of 20 by 0 equals " . $calc->division(20, 0) . PHP_EOL;
        } catch (Exception $e) {
            echo "There was an error in calculating the division.\n";
            echo "Error: {$e->getMessage()}";
        }
    }
}

(new CalculatorTest)->execute();

    //output:
// The sum between 1 and 3 equals 4
// The subraction between 5 and 2 equals 3
// The multiplication between 3 and 4 equals 12
// The division of 12 by 4 equals 3
// There was an error in calculating the division.
// Error: The divisor must not be 0.%