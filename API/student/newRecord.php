<?php
    $address=$_POST['address'];
    $admdate_=$_POST['admdate'];
    $city=$_POST['city'];
    $course=$_POST['course'];
    $dob=$_POST['dob'];
    $fathername=$_POST['fathername'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $mothername=$_POST['mothername'];
    $mobileno=$_POST['mobileno'];
    $name=$_POST['name'];
    $nationality=$_POST['nationality'];
    $passingyear=$_POST['passingyear'];
    $pin=$_POST['pin'];
    $qualification=$_POST['qualification'];
    $rollno=$_POST['rollno'];
    $state=$_POST['state'];

    $link = mysqli_connect("localhost", "root", "", "ims");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }


    $sql = "INSERT INTO student VALUES ('$rollno','$name','$dob','$gender','$course','$address','$state','$city','$pin','$fathername','$mothername','$mobileno','$email','$qualification','$passingyear','$nationality')";
           
   if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);



?>