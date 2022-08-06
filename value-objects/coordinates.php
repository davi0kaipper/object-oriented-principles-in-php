<?php

declare(strict_types=1);

class Point
{
    /** @var array{x:float,y:float} */
    public array $coordinates;

    public function __construct(float $x, float $y)
    {
        $this->coordinates = ['x' => $x, 'y' => $y];
    }

    public function coord(string $axis): float
    {
        if ($axis !== 'x' && $axis !== 'y') {
            throw new Exception('Enter either x or y.');
        }

        return $this->coordinates[$axis];
    }
}

class Module
{
    private float $distance;

    public function __construct(Point $p, Point $q)
    {
        $this->distance = sqrt( ($p->coord('x') - $q->coord('x')) ** 2 + ($p->coord('y') - $q->coord('y')) ** 2);
    }
}

$module = new Module ($p, $q);

$p = new Point(1, 1);
$q = new Point(2, 1 + sqrt(2));

print_r ($module); //sqrt(3)
