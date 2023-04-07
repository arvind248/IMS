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

    $sql=" INSERT INTO enquiry 
            VALUES(
                    '$enquiryid',
                    '$enquirydate',
                    '$registrationfees',
                    '$status',
                    '$name',
                    '$gender',
                    '$course',
                    '$address',
                    '$state',
                    '$city',
                    '$pin',
                    '$fathername',
                    '$mobileno',
                    '$email',
                    '$qualification',
                    '$passingyear',
                    '$nationality'
                )";


    
           
   if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);



?>