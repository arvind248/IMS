<?php
    require '../connection.php';
    $name=$_GET['name'];



    $sql= "DELETE FROM course  WHERE name='$name'";
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