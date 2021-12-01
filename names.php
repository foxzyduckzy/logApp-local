<?php

require ('vendor/autoload.php');
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost/phpmyadmin/","root","09272781088","Faker");

if(!$conn)
{   
die(mysqli_error());
}  

foreach(range(1, 100) as $x) {
    $body = $faker->email(20);
    $body = $faker->firstName(20);
    $body = $faker->lastName(20);
    $body = $faker->userName(20);
    $body = $faker->passWord(20);

    print_r($body);



echo $faker->email('email') ."\n";
echo $faker->firstName('firstName') ."\n";
echo $faker->lastName('lastName') ."\n";
echo $faker->userName('userName') ."\n";
echo $faker->passWord() ."\n";

}
?>