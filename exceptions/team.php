<?php

class TeamException extends Exception{
    public function fromTooManyMembers()
    {
        return new static("You've exceeded the maximum number of members.");
    }
}

class Member {

    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team {

    private $members = [];

    public function add(Member $member): void
    {
        if (count($this->members) === 6) {
            throw TeamException::fromTooManyMembers();
        }

        $this->members[] = $member;
    }

    public function getMembers(): array
    {
        return $this->members;
    }
}

class TeamMemberController
{
    public function store_1()
    {
        $teamAlpha = new Team();

        try {

            $teamAlpha->add(new Member('Alex'));
            $teamAlpha->add(new Member('Gloria'));
            $teamAlpha->add(new Member('Martin'));
            $teamAlpha->add(new Member('Melman'));
            $teamAlpha->add(new Member('Julian'));
            $teamAlpha->add(new Member('Maurice'));

            print_r($teamAlpha->getMembers());

        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    public function store_2()
    {
        $teamAlpha = new Team();

        try {

            $teamAlpha->add(new Member('Alex'));
            $teamAlpha->add(new Member('Gloria'));
            $teamAlpha->add(new Member('Martin'));
            $teamAlpha->add(new Member('Melman'));
            $teamAlpha->add(new Member('Julian'));
            $teamAlpha->add(new Member('Maurice'));
            $teamAlpha->add(new Member('Mort'));

            print_r($teamAlpha->getMembers());

        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }
}

(new TeamMemberController())->store_1();
    //output:
// Array
// (
//     [0] => Member Object
//         (
//             [name:Member:private] => Alex
//         )
//     [1] => Member Object
//         (
//             [name:Member:private] => Gloria
//         )
//     [2] => Member Object
//         (
//             [name:Member:private] => Martin
//         )
//     [3] => Member Object
//         (
//             [name:Member:private] => Melman
//         )
//     [4] => Member Object
//         (
//             [name:Member:private] => Julian
//         )
//     [5] => Member Object
//         (
//             [name:Member:private] => Maurice
//         )
// )

(new TeamMemberController())->store_2(); // You've exceeded the maximum number of members.
