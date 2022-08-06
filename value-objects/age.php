<?php

class Age
{
    private int $age;

    public function __construct($age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That hardly the case.');
        }

        $this->age = $age;
    }

    public function increment()
    {
        return new self($this->age + 1);
    }

    public function get()
    {
        return $this->age;
    }
}

function test($param)
{
    try {
        $age = new Age($param);
        print_r ($age)."<br>";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

test(100); // Age Object ( [age:Age:private] => 100 )
test(1000); // That hardly the case.
test(-10); // That hardly the case.