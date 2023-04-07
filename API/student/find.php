<?php
 $rollno=$_GET['rollno'];
$link = mysqli_connect("localhost", "root", "", "ims");
if($link === false){
   die("ERROR: Could not connect. ".mysqli_connect_error());
}    
    

function isExist($offset,$number,$rollno){
    global $link;
    $sql= "SELECT * FROM (SELECT * FROM student LIMIT $offset,$number) as std  WHERE rollno='$rollno'";
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
  

if($currentRecordPostion=binarySearch($rollno,25))
{
    // echo "Exist at ".$currentRecordPostion;
    $sql= "SELECT * FROM student LIMIT $currentRecordPostion,10";
    if($result=mysqli_query($link,$sql))
    {
        if(mysqli_num_rows($result) > 0){
            $records=$result -> fetch_all(MYSQLI_ASSOC);
            echo json_encode($records);  
        }
    }
    else{
        echo mysqli_error($link);
    }

}