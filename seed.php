<?php

    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");


    // Checks whether we are logged in
    if (isset($_SESSION['id'])) {

        // $array_students = array(
        //     array(
        //         "studentid" => "21424839",
        //         "password" => "test",
        //         "dob" => "23121994",
        //         "firstname" => "Maarten",
        //         "lastname" => "Vanderbeeken",
        //         "house" => "Stanton house",
        //         "town" => "Aylesbury",
        //         "county" => "Buckinghamshire",
        //         "country" => "England",
        //         "postcode" => "hp218fq"
        //     ),
        //     array(
        //         "studentid" => "21743499",
        //         "password" => "bop",
        //         "dob" => "14071999",
        //         "firstname" => "James",
        //         "lastname" => "Day",
        //         "house" => "Apple house",
        //         "town" => "Aylesbury",
        //         "county" => "Buckinghamshire",
        //         "country" => "England",
        //         "postcode" => "hp225dz"
        //     ),
        //     array(
        //         "studentid" => "22477347",
        //         "password" => "mep",
        //         "dob" => "01092001",
        //         "firstname" => "Kevin",
        //         "lastname" => "Jones",
        //         "house" => "Osmand house",
        //         "town" => "Tring",
        //         "county" => "Buckinghamshire",
        //         "country" => "England",
        //         "postcode" => "hp446ez"
        //     ),
        //     array(
        //         "studentid" => "22443388",
        //         "password" => "bam",
        //         "dob" => "22092002",
        //         "firstname" => "Mary",
        //         "lastname" => "Smith",
        //         "house" => "Summer's house",
        //         "town" => "High Wycombe",
        //         "county" => "Buckinghamshire",
        //         "country" => "England",
        //         "postcode" => "hp887fx"
        //     ),
        //     array(
        //         "studentid" => "22472144",
        //         "password" => "elm",
        //         "dob" => "31012001",
        //         "firstname" => "Sarah",
        //         "lastname" => "Fowle",
        //         "house" => "Burberry house",
        //         "town" => "Marlow",
        //         "county" => "Buckinghamshire",
        //         "country" => "England",
        //         "postcode" => "hp456gh"
        //     ),
        // );
        
        // foreach ($array_students as $key => $student_array) {
        //     $student_array
        // }

        $sql = "INSERT INTO student (studentid, password, dob, firstname, 
                lastname, house, town, county, country, postcode)
                VALUES (value1, value2, value3, value4, value5, value6, 
                value7, value8, value9, value10)";

        $result = mysqli_query($conn,$sql);

        // INSERT INTO table_name (column1, column2, column3, ...)
        // VALUES (value1, value2, value3, ...);

    } 

?>