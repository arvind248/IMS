<?php
$str = file_get_contents("cities.json");
$stateCities=[];
$state=$_GET['state'];

     $cities= json_decode($str);
     foreach($cities as $city){     
          if(strcasecmp($city->state,$state)==0){
               array_push($stateCities,$city);
          }
     }     
     echo json_encode($stateCities);
     
?>