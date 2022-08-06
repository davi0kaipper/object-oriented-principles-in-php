<?php

class AchievementType
{
    public function name(): string
    {
        return "Congratulations!";
    }

    public function difficulty(): string
    {
        return "Intermediate";
    }
}

class FirstThousandPoints extends AchievementType
{
    // Override example
    public function name(): string
    {
        return "Welcome aboard!";
    }
}

$message = (new FirstThousandPoints)->name();

echo "$message";
