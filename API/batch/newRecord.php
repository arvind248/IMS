<?php
    
    include "connection.php";
    $batchid=$_POST['batchid'];
    $name=$_POST['name'];
    $teacher=$_POST['teacher'];
    $timing=$_POST['timing'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];





   $sql="INSERT INTO batch VALUES(
                    '$batchid',
                    '$name',
                    '$teacher',
                    '$timing',
                    '$startdate',
                    '$enddate'
                    )";

           
   if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);



?>