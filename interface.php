<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        echo "Subscribing with Campaign Monitor\n";
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {
        echo "Subscribing with Drip\n";
    }
}

class NewsLetterSubscriptionsController
{
    public function store(Newsletter $newsletter) // flexibilidade e garantia
    {
        $email = 'joe@example.com';

        $newsletter->subscribe($email);
    }
}

$controller = new NewsLetterSubscriptionsController();

$controller->store(new CampaignMonitor());
$controller->store(new Drip());
