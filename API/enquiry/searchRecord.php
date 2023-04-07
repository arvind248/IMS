<?php
    $enquiryid=$_GET['enquiryid'];

    require '../connection.php';

    $sql= "SELECT * FROM enquiry WHERE enquiryid='$enquiryid'";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){

            // $row = mysqli_fetch_array($result);
            $row = $result -> fetch_assoc();
            echo json_encode($row);                        
        }
    }
    else{
        echo mysqli_error($link);
    }

?>