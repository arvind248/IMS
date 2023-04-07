<?php
    $batchid=$_GET['batchid'];

    include "connection.php";
    $sql= "SELECT * FROM batch WHERE batchid=$batchid";
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