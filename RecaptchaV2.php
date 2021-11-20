<?php
function RecaptchaV2($siteurl,$sitekey,$apikey){
	$ua=array();
	$ua[]="Host: api.anycaptcha.com";
	$ua[]="Content-Type: application/json";
	
	$data=json_encode(array("clientKey"=>$apikey,"task"=>array("type"=>"RecaptchaV2TaskProxyless","websiteURL"=>$siteurl,"websiteKey"=>$sitekey,"isInvisible"=>false)));
	$Create=json_decode(Run('https://api.anycaptcha.com/createTask',$ua,$data));
	if($Create->errorId == '1'){
		return 0;
	}else{
		$Task=$Create->taskId;
		while(true){
			$base=json_encode(array("clientKey"=>$apikey,"taskId"=>$Task));
			$Result=json_decode(Run('https://api.anycaptcha.com/getTaskResult',$ua,$base));
			if($Result->status=='ready'){
				return $Result->solution->gRecaptchaResponse;
			}elseif($Result->status=='processing'){
				tmr(25);
			}else{
				return 0;
				break;
			}
		}
	}
}
