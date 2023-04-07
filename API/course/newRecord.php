<?php
    
    require "../connection.php";
    $name=$_POST['name'];
    $duration=$_POST['duration'];
    $fees=$_POST['fees'];
    $eligibility=$_POST['eligibility'];
    $category=$_POST['category'];

   $sql="INSERT INTO course VALUES(
                    '$name',
                    '$duration',
                    '$fees',
                    '$eligibility',
                    '$category'
                    )";

           
   if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);



?>