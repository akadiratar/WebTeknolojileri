<?php 


if($_POST){
	
	$ad = $_POST['name'];
	$email = $_POST['email'];
	$konu = $_POST['konu'];
	$mesaj = $_POST['mesaj'];
	
	echo "<h1><b>İletişim Formu Bilgileri</b></h1><hr><br><br>";
	echo "<b> Ad Soyad : </b> " . $ad. "<br>"; 
	echo "<b> E-Posta : </b> " . $email. "<br>"; 
	echo "<b> Konu : </b> " . $konu. "<br>"; 
	echo "<b> Mesaj : </b> " . $mesaj. "<br>"; 
	
	
	
}


?>