<?php
require "../connection.php";
$empid=$_GET['empid'];
    

function isExist($offset,$number,$empid){
    global $link;
    $sql= "SELECT * FROM (SELECT * FROM employee LIMIT $offset,$number) as emp  WHERE empid='$empid'";
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
function binarySearch($empid,$totalrecord)
{
    
    $low = 0;
    $high = $totalrecord;
    if(!isExist($low,$high,$empid)) {
        return false;
    }  
  

    while ($low <= $high) {                  
        $mid = floor(($low + $high) / 2);           
        if(isExist($mid-1,1,$empid)) {
            return $mid;
        }  
        
        if(isExist($mid,abs($high-$mid),$empid)) {
            
            $low = $mid+1;
            
        }
        else{
         

            
            $high = $mid - 1;
        }
        
    }        
    return false;
}
  

if($currentRecordPostion=binarySearch($empid,25))
{
    

    $offset=$currentRecordPostion-10-1;
    $numberofrecord=10;
    if($offset<0)
    {
        $offset=0;
        $numberofrecord=$currentRecordPostion-1;
    }
    

    $sql= "SELECT * FROM employee LIMIT $offset,$numberofrecord";
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

?>