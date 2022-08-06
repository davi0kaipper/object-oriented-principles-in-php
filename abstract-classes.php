<?php

class User
{
    private $rank;
    private $points;

    public function __construct($rank, $points)
    {
        $this->rank = $rank;
        $this->points = $points;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getPoints()
    {
        return $this->points;
    }
}

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . ".png";
    }

    abstract public function qualifier($user);
}

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {
        if ($user->getRank() <= 50) {
            return "Pro player";
        } else {
            return "Beginner player";
        }
    }
}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
        return $user->getPoints() >= 1000;
    }
}

$top50 = new ReachTop50;
$firstThousands = new FirstThousandPoints;

$user1 = new User(60, 1050);
$user2 = new User(49, 960);

echo $top50->qualifier($user1); // Beginner player
echo $top50->qualifier($user2); // Pro player

var_dump($firstThousands->qualifier($user1)); // true
var_dump($firstThousands->qualifier($user2)); // false
