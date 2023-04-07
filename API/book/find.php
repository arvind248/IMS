<?php
 $bookid=$_GET['bookid'];
//  echo $bookid;

$link = mysqli_connect("localhost", "root", "", "ims");
if($link === false){
   die("ERROR: Could not connect. ".mysqli_connect_error());
}    
    

function isExist($offset,$number,$bookid){
    global $link;
    $sql= "SELECT * FROM (SELECT * FROM book LIMIT $offset,$number) as emp  WHERE bookid='$bookid'";
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
function binarySearch($bookid,$totalrecord)
{
    
    $low = 0;
    $high = $totalrecord;
    if(!isExist($low,$high,$bookid)) {
        return false;
    }  
  

    while ($low <= $high) {                  
        $mid = floor(($low + $high) / 2);           
        if(isExist($mid-1,1,$bookid)) {
            return $mid;
        }  
        
        if(isExist($mid,abs($high-$mid),$bookid)) {
            
            $low = $mid+1;
            
        }
        else{
         

            
            $high = $mid - 1;
        }
        
    }        
    return false;
}
  

if($currentRecordPostion=binarySearch($bookid,10))
{
    // echo "Exist at ".$currentRecordPostion;
    $sql= "SELECT * FROM book LIMIT $currentRecordPostion,10";
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
else
{
    // echo "[]";
}