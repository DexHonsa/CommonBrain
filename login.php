<?
	session_start();
	$_SESSION['valid'] = 'true';
	header('Location: dashboard.html')
?>