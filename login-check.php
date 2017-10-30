<?
	session_start();
	if($_SESSION['valid'] == 'true'){
		header("Location: http://commonbrain.io/login.html");
	}else{
		echo 'bad';
	}
?>