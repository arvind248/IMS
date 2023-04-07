<?php
    require '../connection.php';
  
    $sql= "SELECT * FROM course LIMIT 1";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){

            // $row = mysqli_fetch_array($result);
            echo "[";
            $row = $result -> fetch_assoc();
            echo json_encode($row);                        
        }
    }
    else{
        echo mysqli_error($link);
    }
    echo ",";
    $sql= "SELECT * FROM course ORDER BY name DESC LIMIT 1";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){

            // $row = mysqli_fetch_array($result);
            $row = $result -> fetch_assoc();
            echo json_encode($row);                        
            echo "]";
            
        }
    }
    else{
        echo mysqli_error($link);
    }
    


?>