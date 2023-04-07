<?php
$batchid=$_GET['batchid'];
$link = mysqli_connect("localhost", "root", "", "ims");
if($link === false){
   die("ERROR: Could not connect. ".mysqli_connect_error());
}    
    

function isExist($offset,$number,$batchid){
    global $link;
    $sql= "SELECT * FROM (SELECT * FROM batch LIMIT $offset,$number) as emp  WHERE batchid='$batchid'";
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

function binarySearch($batchid,$totalrecord)
{
    
    $low = 0;
    $high = $totalrecord;
    if(!isExist($low,$high,$batchid)) {
        return false;
    }  
  

    while ($low <= $high) {                  
        $mid = floor(($low + $high) / 2);           
        if(isExist($mid-1,1,$batchid)) {
            return $mid;
        }  
        
        if(isExist($mid,abs($high-$mid),$batchid)) {
            
            $low = $mid+1;
            
        }
        else{
         

            
            $high = $mid - 1;
        }
        
    }        
    return false;
}
  

if($currentRecordPostion=binarySearch($batchid,25))
{
    

    $offset=$currentRecordPostion-10-1;
    $numberofrecord=10;
    if($offset<0)
    {
        $offset=0;
        $numberofrecord=$currentRecordPostion-1;
    }
    

    $sql= "SELECT * FROM batch LIMIT $offset,$numberofrecord";
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