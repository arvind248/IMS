<?php
    require "../connection.php";
    $rollno=$_GET['rollno'];

    




    $sql= "DELETE FROM fees  WHERE rollno='$rollno'";
    if(mysqli_query($link,$sql))
    {
        if(mysqli_affected_rows($link)>0)
            echo "Record Delete Successfully";
        else
            echo "Record Not Exist";
    }
    else{
        echo mysqli_error($link);
    }
    
    
?>