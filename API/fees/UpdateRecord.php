<?php
    error_reporting(E_ERROR | E_PARSE);

    require "../connection.php";
    $rollno=$_POST['rollno'];          
    $schoolorship=$_POST['schoolorship'];
    $admsnfees=$_POST['admsnfees'];
    $remaining=$_POST['remaining'];
    $rate=$_POST['rate'];
    $tenure=$_POST['tenure'];
    $emi=$_POST['emi'];
    $firstemi=$_POST['firstemi'];

    



    $sql = "UPDATE fees
            SET                                        
                schoolorship='$schoolorship',
                admsnfees='$admsnfees',
                remaining='$remaining',
                rate='$rate',
                tenure='$tenure',
                emi='$emi',
                firstemi='$firstemi'                    
            WHERE rollno=$rollno";


    if(mysqli_query($link, $sql)){
        echo "Record update successfully.";
    } else{
        // echo mysqli_error($link);
        echo "Record Not updated.";
    }
    
    // Close connection
    mysqli_close($link);



?>