<?php

class Sector
{
    private string $name;
    private int $floor;
    public int $numberOfEmployees;
    /** @var array<Employee> */
    private array $employees = [];

    public function __construct(string $name, int $floor, array $employees)
    {
        $this->name = $name;
        $this->floor = $floor;
        $this->employees = $employees;
        $this->numberOfEmployees = count($this->employees);
    }
}

abstract class Employee
{
    private string $name;
    private int $weekHours = 40;
    private float $salary;

    abstract public function work();
}

class Intern extends Employee
{
    public function __construct(string $name, int $weekHours, float $salary)
    {
        $this->name = $name;
        $this->weekHours = $weekHours;
        $this->salary = $salary;
    }

    public function work(): string
    {
        return "Here's your assistance!";
    }
}

class Graduate extends Employee
{
    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function work(): string
    {
        return "Here's the new project!";
    }
}

class Manager extends Employee
{
    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function work(): string
    {
        return "Here's the plan for action!";
    }
}

class Office
{
    private string $name;
    private string $service;
    private $numberOfEmployees;
    /** @var array<Sector> */
    private array $sectors = [];

    public function __construct(string $name, string $service, array $sectors)
    {
        $this->name = $name;
        $this->service = $service;
        $this->sectors = $sectors;
        $this->numberOfEmployees = array_sum(array_column($this->sectors, 'numberOfEmployees'));
    }
}

$acc = new Sector('Accounting', 2, [
    new Intern('Lee', 20, 1500),
    new Intern('Marcy', 20, 1500),
    new Graduate('Natalie', 1850),
    new Graduate('Owen', 1850),
    new Graduate('Pierce', 1850),
    new Graduate('Quendrianna', 1850),
    new Graduate('Rebecca', 1850),
    new Graduate('Shirley', 1850),
    new Graduate('Troy', 1850),
    new Manager('Uriah', 2700)
]);

$adm = new Sector('Administration', 1, [
    new Intern('Abed', 30, 1000),
    new Graduate('Britta', 2000),
    new Graduate('Carl', 2000),
    new Graduate('Dana', 2000),
    new Manager('Earl', 3100)
]);

$tax = new Sector('Taxation', 3, [
    new Intern('Fabian', 25, 1200),
    new Intern('Gabbriela', 25, 1200),
    new Intern('Hector', 25, 1200),
    new Graduate('Ian', 2200),
    new Graduate('Jeffrey', 2200),
    new Manager('Katie', 2900)
]);

$capcom = new Office('Capcom', 'Accounting', [$acc, $adm, $tax]);

echo "<pre>";
print_r ($capcom);
echo "</pre>";
