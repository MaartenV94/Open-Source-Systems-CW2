<?php

    include("_includes/config.inc");
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

   // check logged in
    if (isset($_SESSION['id'])) {

      // Loop over students and delete entries  
        foreach($_POST['students'] as $student_id) {

            //Execute the sql statement to delete items  
            $sql = "DELETE FROM student WHERE studentid = '$student_id'";

            // Run the query  
            $result = mysqli_query($conn,$sql);
        }

      // Redirect to students page
        header("Location: students.php");

    } else {
      // Redirect to index page  
        header("Location: index.php");
    }

?>

