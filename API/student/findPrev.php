<?php

require "../connection.php";
$rollno=$_GET['rollno'];
    

function isExist($offset,$number,$rollno){
    global $link;
    $sql= "SELECT * FROM (SELECT * FROM student LIMIT $offset,$number) as emp  WHERE rollno='$rollno'";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
                     return true;            
        }
    }
    else{
        return false;
    }


}
function binarySearch($rollno,$totalrecord)
{
    
    $low = 0;
    $high = $totalrecord;
    if(!isExist($low,$high,$rollno)) {
        return false;
    }  
  

    while ($low <= $high) {                  
        $mid = floor(($low + $high) / 2);           
        if(isExist($mid-1,1,$rollno)) {
            return $mid;
        }  
        
        if(isExist($mid,abs($high-$mid),$rollno)) {
            
            $low = $mid+1;
            
        }
        else{
         

            
            $high = $mid - 1;
        }
        
    }        
    return false;
}
  

if($currentRecordPostion=binarySearch($rollno,35))
{
    

    $offset=$currentRecordPostion-10-1;
    $numberofrecord=10;
    if($offset<0)
    {
        $offset=0;
        $numberofrecord=$currentRecordPostion-1;
    }
    

    $sql= "SELECT * FROM student LIMIT $offset,$numberofrecord";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
            $records=$result -> fetch_all(MYSQLI_ASSOC);
            // var_dump( $records);
            echo json_encode($records);  
        }
    }
    else{
        echo mysqli_error($link);
    }

}



// $rollno=$_GET['rollno'];
// require "../connection.php";

// function isExist($offset,$number,$rollno){
//     global $link;
//     $sql= "SELECT * FROM (SELECT * FROM student LIMIT $offset,$number) as std  WHERE rollno='$rollno'";
//     if($result=mysqli_query($link,$sql))
//     {
//         if(mysqli_num_rows($result) > 0){
//                      return true;            
//         }
//     }
//     else{
//         return false;
//     }


// }
// function binarySearch($rollno,$totalrecord)
// {
    
//     $low = 0;
//     $high = $totalrecord;
//     if(!isExist($low,$high,$rollno)) {
//         return false;
//     }  
  

//     while ($low <= $high) {                  
//         $mid = floor(($low + $high) / 2);           
//         if(isExist($mid-1,1,$rollno)) {
//             return $mid;
//         }  
        
//         if(isExist($mid,abs($high-$mid),$rollno)) {
            
//             $low = $mid+1;
            
//         }
//         else{
         

            
//             $high = $mid - 1;
//         }
        
//     }        
//     return false;
// }
  

// if($currentRecordPostion=binarySearch($rollno,25))
// {
    

//     $offset=$currentRecordPostion-10-1;
//     $numberofrecord=10;
//     if($offset<0)
//     {
//         $offset=0;
//         $numberofrecord=$currentRecordPostion-1;
//     }
    

//     $sql= "SELECT * FROM student LIMIT $offset,$numberofrecord";
//     if($result=mysqli_query($link,$sql))
//     {
//         if(mysqli_num_rows($result) > 0){
//             $records=$result -> fetch_all(MYSQLI_ASSOC);
//             // var_dump( $records);
//             echo json_encode($records);  
//         }
//     }
//     else{
//         echo mysqli_error($link);
//     }

// }

?>