<?php
include "../connection.php";
error_reporting(E_ERROR | E_PARSE);

    $accountno=$_POST['accountno'];
    $address=$_POST['address'];
    $basicpay=$_POST['basicpay'];
    $city=$_POST['city'];
    $college1=$_POST['college1'];
    $college2=$_POST['college2'];
    $college3=$_POST['college3'];
    $college4=$_POST['college4'];
    $dob=$_POST['dob'];
    $doj=$_POST['doj'];
    $email=$_POST['email'];
    $experience1=$_POST['experience1'];
    $experience2=$_POST['experience2'];
    $experience3=$_POST['experience3'];
    $experience4=$_POST['experience4'];
    $fathername=$_POST['fathername'];
    $gender=$_POST['gender'];
    $holdername=$_POST['holdername'];
    $ifsc=$_POST['ifsc'];
    $marks1=$_POST['marks1'];
    $marks2=$_POST['marks2'];
    $marks3=$_POST['marks3'];
    $marks4=$_POST['marks4'];
    $mobileno=$_POST['mobileno'];
    $name=$_POST['name'];
    $nationality=$_POST['nationality'];
    $pan=$_POST['pan'];
    $passingyear1=$_POST['passingyear1'];
    $passingyear2=$_POST['passingyear2'];
    $passingyear3=$_POST['passingyear3'];
    $passingyear4=$_POST['passingyear4'];
    $pin=$_POST['pin'];
    $qualification1=$_POST['qualification1'];
    $qualification2=$_POST['qualification2'];
    $qualification3=$_POST['qualification3'];
    $qualification4=$_POST['qualification4'];
    $empid=$_POST['empid'];
    $state=$_POST['state'];
    $teachingplace1=$_POST['teachingplace1'];
    $teachingplace2=$_POST['teachingplace2'];
    $teachingplace3=$_POST['teachingplace3'];
    $teachingplace4=$_POST['teachingplace4'];
    $workinghrs=$_POST['workinghrs'];

    
     


    $sql = "UPDATE employee
            SET             
                    name='$name',
                    dob='$dob',
                    gender='$gender',
                    address='$address',
                    state='$state',
                    city='$city',
                    pin='$pin',
                    fathername='$fathername',
                    mobileno='$mobileno',
                    email='$email',
                    nationality='$nationality',
                    qualification1='$qualification1',
                    college1='$college1',
                    passingyear1='$passingyear1',
                    marks1='$marks1',
                    qualification2='$qualification2',
                    college2='$college2',
                    passingyear2='$passingyear2',
                    marks2='$marks2',
                    qualification3='$qualification3',
                    college3='$college3',
                    passingyear3='$passingyear3',
                    marks3='$marks3',
                    qualification4='$qualification4',
                    college4='$college4',
                    passingyear4='$passingyear4',
                    marks4='$marks4',
                    experience1='$experience1',
                    teachingplace1='$teachingplace1',
                    experience2='$experience2',
                    teachingplace2='$teachingplace2',
                    experience3='$experience3',
                    teachingplace3='$teachingplace3',
                    experience4='$experience4',
                    teachingplace4='$teachingplace4',
                    holdername='$holdername',
                    accountno='$accountno',
                    ifsc='$ifsc',
                    pan='$pan',
                    basicpay='$basicpay',
                    workinghrs='$workinghrs',
                    doj='$doj'
            WHERE empid='$empid'";


    if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo "Records Not update.";
    }
    
    // Close connection
    mysqli_close($link);



?>