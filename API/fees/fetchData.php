<?php
    
    require "../connection.php";
    $rollno=$_GET['rollno'];
    
    $sql= "SELECT student.rollno,
            student.name,
            student.dob,
            student.course,
            course.duration,
            course.fees
            FROM student INNER JOIN course ON student.course=course.name
            WHERE rollno=$rollno";
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









