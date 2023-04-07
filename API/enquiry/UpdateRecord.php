<?php

require '../connection.php';
    $enquiryid=$_POST['enquiryid'];
    $enquirydate=$_POST['enquirydate'];
    $registrationfees=$_POST['registrationfees'];
    $status=$_POST['status'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $pin=$_POST['pin'];
    $fathername=$_POST['fathername'];
    $mobileno=$_POST['mobileno'];
    $email=$_POST['email'];
    $qualification=$_POST['qualification'];
    $passingyear=$_POST['passingyear'];
    $nationality=$_POST['nationality'];
    

    $sql = "UPDATE enquiry 
            SET
                enquirydate='$enquirydate',
                registrationfees='$registrationfees',
                status='$status',
                name='$name',
                gender='$gender',
                course='$course',
                address='$address',
                state='$state',
                city='$city',
                pin='$pin',
                fathername='$fathername',
                mobileno='$mobileno',
                email='$email',
                qualification='$qualification',
                passingyear='$passingyear',
                nationality='$nationality'
            WHERE enquiryid='$enquiryid'";


    if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo "Records Not update.";
    }
    
    // Close connection
    mysqli_close($link);



?>