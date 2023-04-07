<?php
    error_reporting(E_ERROR | E_PARSE);

    require "../connection.php";
    $name=$_POST['name'];
    $duration=$_POST['duration'];
    $fees=$_POST['fees'];
    $eligibility=$_POST['eligibility'];
    $category=$_POST['category'];


    $sql = "UPDATE course
            SET                       
                duration='$duration',
                fees='$fees',
                eligibility='$eligibility',
                category='$category'
            WHERE name='$name'";


    if(mysqli_query($link, $sql)){
            if(mysqli_affected_rows($link)>0){
                echo "Record updated Successfully.";
            }
            else{
                echo "Record Not updated.";
            }

    } else{
        // echo mysqli_error($link);
        echo "Record Not updated.";
    }
    
    // Close connection
    mysqli_close($link);



?>