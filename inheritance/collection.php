<?php

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_column($this->items, $key));
    }
}

class VideoCollection extends Collection
{

    public function length(): int
    {
        return $this->sum('length');
    }
}

class Video{
    public string $title;
    public int $length;

    public function __construct(string $title, int $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideoCollection([
    new Video('Lecture', 650),
    new Video('Vlog', 420),
    new Video('Unboxing', 3200),
]);

echo $videos->length(); // 4270
