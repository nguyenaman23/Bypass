<?php

function Solvemedia($img,$apikey){
 $content=base64_encode(file_get_contents($img));
 $ua=array();
 $ua[]="Host: api.anycaptcha.com";
 $ua[]="Content-Type: application/json";
 
 $data=json_encode(array("clientKey"=>$apikey,"task"=>array("type"=>"ImageToTextTask","body"=>$content)));
 $Create=json_decode(Run('https://api.anycaptcha.com/createTask',$ua,$data));
 if($Create->errorId == '1'){
  return 0;
 }else{
  $Task=$Create->taskId;
  while(true){
   $base=json_encode(array("clientKey"=>$apikey,"taskId"=>$Task));
   $Result=json_decode(Run('https://api.anycaptcha.com/getTaskResult',$ua,$base));
   if($Result->status=='ready'){
    return $Result->solution->text;
   }elseif($Result->status=='processing'){
    tmr(25);
   }else{
    return 0;
    break;
   }
  }
 }
}
