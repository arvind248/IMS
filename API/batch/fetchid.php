<?php
    
    include "./connection.php";
    
    $sql= "SELECT * FROM batch ORDER BY batchid DESC LIMIT 1";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            // echo json_encode($row);
            $batchid=$row['batchid'];
            // echo $empid.", ";
            echo ++$batchid;
        }
    }
    else{
        echo mysqli_error($link);
    }


?>









