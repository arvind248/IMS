<?php

    require '../connection.php';
    $name=$_GET['name'];
   
    $sql= "SELECT * FROM course WHERE name='$name'";
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