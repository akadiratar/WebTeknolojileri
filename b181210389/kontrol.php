<?php 

if($_POST){
	
	
	$email = $_POST['email'];
	$sifre = $_POST['password'];
	
	
	if(($email == "abdulkadir.atar@ogr.sakarya.edu.tr") and ($sifre == "test123")){
		
		$email = explode("@",$email);
		echo  "<p style='color:red'>Hoşgeldiniz <b>".$email[0]."</b></span>";
	}else{
		echo 2;
	}
	
}

?>