<?php
    
    require "../connection.php";
    
    $sql= "SELECT * FROM employee ORDER BY empid DESC LIMIT 1";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            // echo json_encode($row);
            $empid=$row['empid'];
            // echo $empid.", ";
            echo ++$empid;
        }
    }
    else{
        echo mysqli_error($link);
    }

?>