<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	
	
	mail("dexhonsa@hotmail.com", "A User Has Requested Commonbrain Information", "Name: $name, Email: $email, company: $company");
	mail("johnnyvelasquez@email.arizona.edu", "A User Has Requested Commonbrain Information", "Name: $name, Email: $email, company: $company");

	


?>