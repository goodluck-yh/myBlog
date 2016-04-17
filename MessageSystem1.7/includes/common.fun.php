<?php 
	function isAuthorty(){
		if(defined(AUTHORTY)==false)
			exit("非法调用");
	}
	function getTime(){
		$Time = explode(" ", microtime());
		return $Time[0]+$Time[1];
	}
	function alert_back($str){
	    echo "<script>alert('".$str."');window.history.go(-1);</script>";
	}
	function get_uniqid(){
	    return sha1(uniqid());
	}
?>