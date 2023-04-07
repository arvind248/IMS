<?php
    
    $link = mysqli_connect("localhost", "root", "", "ims");
    if($link === false){
        die("ERROR: Could not connect. ".mysqli_connect_error());
    }
    




    $sql= "SELECT * FROM student ORDER BY rollno DESC LIMIT 1";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            // echo json_encode($row);
            $enrollment=$row['rollno'];
            // echo $enrollment.", ";
            echo ++$enrollment;
        }
    }
    else{
        echo mysqli_error($link);
    }

?>