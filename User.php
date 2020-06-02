<?php


class User
{
    public $name;
    public $last_name;
    public $age;
    public $birth_date;

    function __construct($first_name, $last_name, $age, $birth_date)
    {
        $this->name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->birth_date = $birth_date;
    }

    function calculate_age()
    {

        return date($this->birth_date);
    }

}

/**
 *  Exemple of execution code
 */

$user1 = new User('hatem', 'dagbouj', 20, "11/11/1990");
$user2 = new User('med', 'ben saleh', 20, "11/11/1990");
$user3 = new User('ali', 'tounsi', 20, "11/11/1990");
$user4 = new User('abir', 'ben ali', 20, "11/11/1990");

$users = [ $user1, $user2, $user3, $user4];

foreach ($users as $user)
{
    echo "l'ulisateur courant est $user->first_name $user->last_name  et age = ". var_dump($user->calculate_age())." <br>";

}