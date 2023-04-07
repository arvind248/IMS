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


    $sql = "UPDATE student 
            SET name='$name',dob='$dob',gender='$gender',course='$course',address='$address',state='$state',city='$city',pin='$pin',fathername='$fathername',mothername='$mothername',mobileno='$mobileno',email='$email',qualification='$qualification',passingyear='$passingyear',nationality='$nationality'
            WHERE rollno='$rollno'";


    if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo "Records Not update.";
    }
    
    // Close connection
    mysqli_close($link);



?>