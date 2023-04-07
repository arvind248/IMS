<?php
    
  require '../connection.php';

    $sql= "SELECT * FROM enquiry ORDER BY enquiryid DESC LIMIT 1";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            // echo json_encode($row);
            $enquiryid=$row['enquiryid'];
            // echo $enrollment.", ";
            echo ++$enquiryid;
        }
    }
    else{
        echo mysqli_error($link);
    }

?>