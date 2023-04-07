<?php

require "../connection.php";
    $empid=$_GET['empid'];

    
    




    $sql= "DELETE FROM employee  WHERE empid='$empid'";
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