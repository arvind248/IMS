<?php
require '../connection.php';
$enquiryid=$_GET['enquiryid'];

    

function isExist($offset,$number,$enquiryid){
    global $link;
    $sql= "SELECT * FROM (SELECT * FROM enquiry LIMIT $offset,$number) as std  WHERE enquiryid='$enquiryid'";
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
function binarySearch($enquiryid,$totalrecord)
{
    
    $low = 0;
    $high = $totalrecord;
    if(!isExist($low,$high,$enquiryid)) {
        return false;
    }  
  

    while ($low <= $high) {                  
        $mid = floor(($low + $high) / 2);           
        if(isExist($mid-1,1,$enquiryid)) {
            return $mid;
        }  
        
        if(isExist($mid,abs($high-$mid),$enquiryid)) {
            
            $low = $mid+1;
            
        }
        else{
         

            
            $high = $mid - 1;
        }
        
    }        
    return false;
}
  

if($currentRecordPostion=binarySearch($enquiryid,10))
{
    

    $offset=$currentRecordPostion-10-1;
    $numberofrecord=10;
    if($offset<0)
    {
        $offset=0;
        $numberofrecord=$currentRecordPostion-1;
    }
    

    $sql= "SELECT * FROM enquiry LIMIT $offset,$numberofrecord";
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