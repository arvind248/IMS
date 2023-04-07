<?php
require '../connection.php';
if(!isset($_GET['name']))
{
    $sql= "SELECT * FROM course";
    fetchRecord($link,$sql);
    die();
}
$name=$_GET['name'];
//  echo $name;



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

function fetchRecord($link,$sql){

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


// if($name==null)
// {
//     die("name is not defined");
// }



if($currentRecordPostion=binarySearch($name,10))
{
    // echo "Exist at ".$currentRecordPostion;
    $sql= "SELECT * FROM course LIMIT $currentRecordPostion,10";
    fetchRecord($link,$sql);

}
else
{
    // echo "[]";
}

