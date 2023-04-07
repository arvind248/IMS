<?php
require '../connection.php';
$name=$_GET['name'];

    

function isExist($offset,$number,$name){
    global $link;
    $sql= "SELECT * FROM (SELECT * FROM course LIMIT $offset,$number) as emp  WHERE name='$name'";
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

function binarySearch($name,$totalrecord)
{
    
    $low = 0;
    $high = $totalrecord;
    if(!isExist($low,$high,$name)) {
        return false;
    }  
  

    while ($low <= $high) {                  
        $mid = floor(($low + $high) / 2);           
        if(isExist($mid-1,1,$name)) {
            return $mid;
        }  
        
        if(isExist($mid,abs($high-$mid),$name)) {
            
            $low = $mid+1;
            
        }
        else{
         

            
            $high = $mid - 1;
        }
        
    }        
    return false;
}
  

if($currentRecordPostion=binarySearch($name,25))
{
    

    $offset=$currentRecordPostion-10-1;
    $numberofrecord=10;
    if($offset<0)
    {
        $offset=0;
        $numberofrecord=$currentRecordPostion-1;
    }
    

    $sql= "SELECT * FROM course LIMIT $offset,$numberofrecord";
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