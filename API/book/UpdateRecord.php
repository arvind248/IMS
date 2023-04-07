<?php
    error_reporting(E_ERROR | E_PARSE);

    include "./connection.php";
    $bookid=$_POST['bookid'];
    $name=$_POST['name'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $price=$_POST['price'];
    $pages=$_POST['pages'];
    $isbnno=$_POST['isbnno'];
    $category=$_POST['category'];
    $status=$_POST['status'];





    $sql = "UPDATE book
            SET                         
                name='$name',
                title='$title',
                author='$author',
                price='$price',
                pages='$pages',
                isbnno='$isbnno',
                category='$category',
                status='$status'
            WHERE bookid='$bookid'";


    if(mysqli_query($link, $sql)){
        echo "Record update successfully.";
    } else{
        echo "Record Not update.";
    }
    
    // Close connection
    mysqli_close($link);



?>