<?php
    $batchid=$_GET['batchid'];

    $link = mysqli_connect("localhost", "root", "", "ims");
    if($link === false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }
    




    $sql= "DELETE FROM batch  WHERE batchid='$batchid'";
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