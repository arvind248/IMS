<?php
    
    require "../connection.php";
    
    $rollno=$_POST['rollno'];          
    $schoolorship=$_POST['schoolorship'];
    $admsnfees=$_POST['admsnfees'];
    $remaining=$_POST['remaining'];
    $rate=$_POST['rate'];
    $tenure=$_POST['tenure'];
    $emi=$_POST['emi'];
    $firstemi=$_POST['firstemi'];
    




   $sql="INSERT INTO fees VALUES(
                09iju7

            )";

           
   if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);



?>