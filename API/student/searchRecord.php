<?php
    $rollno=$_GET['rollno'];

    $link = mysqli_connect("localhost", "root", "", "ims");
    if($link === false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }
    




    $sql= "SELECT * FROM student WHERE rollno='$rollno'";
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