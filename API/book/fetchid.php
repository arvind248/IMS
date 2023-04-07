<?php
    
    include "./connection.php";
    
    $sql= "SELECT * FROM book ORDER BY bookid DESC LIMIT 1";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            // echo json_encode($row);
            $bookid=$row['bookid'];
            // echo $empid.", ";
            echo ++$bookid;
        }
    }
    else{
        echo mysqli_error($link);
    }

?>