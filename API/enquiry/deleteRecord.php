<?php
    $enquiryid=$_GET['enquiryid'];

    include "connection.php";
    




    $sql= "DELETE FROM enquiry  WHERE enquiryid='$enquiryid'";
    if(mysqli_query($link,$sql))
    {
        if(mysqli_affected_rows($link)>0)
            echo "Record Delete Successfully";
        else
            echo "Record Does Not Exist";
    }
    else{
        echo mysqli_error($link);
    }

?>