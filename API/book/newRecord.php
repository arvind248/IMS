<?php
    
    include "connection.php";
    $bookid=$_POST['bookid'];
    $name=$_POST['name'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $price=$_POST['price'];
    $pages=$_POST['pages'];
    $isbnno=$_POST['isbnno'];
    $category=$_POST['category'];
    $status=$_POST['status'];
   
   $sql="INSERT INTO 
   book VALUES('$bookid',
                '$name',
                '$title',
                '$author',
                '$price',
                '$pages',
                '$isbnno',
                '$category',
                '$status')";



           
   if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);



?>