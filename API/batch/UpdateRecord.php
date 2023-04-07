<?php
    error_reporting(E_ERROR | E_PARSE);

    include "./connection.php";
    $batchid=$_POST['batchid'];
    $name=$_POST['name'];
    $teacher=$_POST['teacher'];
    $timing=$_POST['timing'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];


    



    $sql = "UPDATE batch
            SET                        
                name='$name',
                teacher='$teacher',
                timing='$timing',
                startdate='$startdate',
                enddate='$enddate'
            WHERE batchid=$batchid";


    if(mysqli_query($link, $sql)){
        echo "Record update successfully.";
    } else{
        // echo mysqli_error($link);
        echo "Record Not updated.";
    }
    
    // Close connection
    mysqli_close($link);



?>