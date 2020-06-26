<?php

// create class Person

// Create properties $name,$job and $age
// Create a constructor that will accept $name,$job and $age variables and put them in class properties

// Create method changeJob  which will accept parameter $newJob

// Create method happyBirthday which will increase age


// Create two new people Tom with job "Button-Pusher", with age 34 and John with job "Lever-Puller" age 41
 class Person {
    public $name;
    public $job;
    public $age;

    public function changeJob($newJob) {
        $this->job = $newJob;
    }

    public function happyBirthday() {
        ++$this->age;
    }
 }

$tom new Person ('Tom', 'Button-Pusher', 34);
$john new Person ('John' 'Lever-Puller', 41);

echo "<pre>Person 1: ", print_r($tom, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($john, TRUE), "</pre>";
 
$tom->changeJob('Box-Mover');
$tom->happyBirthday();

$john->happyBirthday();

echo "<pre>Person 1: ", print_r($tom, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($john, TRUE), "</pre>";

// Output their starting point
// echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
// echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
// Give Tom a promotion (change his job to "Box-Mover" using changeJob method) and a birthday
 
 
// John just gets a year older
 
 
// Output the ending values
// echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
// echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
