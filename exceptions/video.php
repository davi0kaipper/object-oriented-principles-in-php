<?php

Class Video
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

Class User
{
    private bool $subscribed;

    public function __construct(bool $subscribed)
    {
        $this->subscribed = $subscribed;
    }

    public function download(Video $video)
    {
        if (! $this->subscribed) {
            throw new Exception("You must be subscribed to download videos.\n");
        }

        echo "Downloaded!\n";
    }
}

function attemptDownload(bool $sub)
{
    try {
        (new User($sub))->download(new Video("Lecture"));
    } catch (Exception $e) {
        print_r($e->getMessage());
    }
}

attemptDownload(true); // Downloaded!
attemptDownload(false); // You must be subscribed to download videos.
