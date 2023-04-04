<?php

    //include("_includes/config.inc");
    //include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

    require_once '/Users/maartenvanderbeeken/vendor/autoload.php';

    $faker = Faker\Factory::create();

    $db = new mysqli("localhost", "root", "", "cw2_students");

    $db->query("DELETE FROM student");

    $db->query("INSERT INTO student (studentid, password, dob, firstname, 
                lastname, house, town, county, country, postcode) 
                VALUES ('20000000', '$2y$10$.LJBOl64nZWEVVE/v5mgNuzR01zx1zoyXuGJUa/zp2U.MQxkps3LS', 
                '1974-11-10', 'Jon', 'Smith', '23 Victoria Road', 'High Wycombe', 
                'Bucks', 'UK', 'HP11 1RT');");

    $db->query("ALTER TABLE student AUTO_INCREMENT = 1");

    foreach(range(20000001,29999999) as $x) {
        $student_id = $x;

        $db->query("
            INSERT INTO student (studentid, password, dob, firstname, 
            lastname, house, town, county, country, postcode)
            VALUES ('$student_id', '{$faker->password}', 
            '{$faker->date}', '{$faker->firstName}', '{$faker->lastName}', '{$faker->word}', 
            '{$faker->city}', '{$faker->city}', '{$faker->country}', '{$faker->postcode}')
        ");
    }



?>