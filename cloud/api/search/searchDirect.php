<?php
	include_once('/home/content/80/11356380/html/3d/cloud/models/search/searchDirect.php');

	extract($_REQUEST);
	
	$apiResp = searchDirect($searchTerm);
	
	if($apiResp == NULL){
		$resp = array('status'=>'fail', 'data'=>$apiResp);
		echo(json_encode($resp));
		return;
	}
	else{
		$resp = array('status'=>'success', 'data'=>$apiResp);
		echo(json_encode($resp));
		return;
	}
	
?>