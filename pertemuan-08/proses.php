
<?php
session_start();
$sesnama = $_POST["txtNAMA"];
$sesemail = $_POST["txtEMAIL"];
$sespesan = $_POST["txtPESAN"];
$sesalamat = $_POST["txtALAMAT"];  
$sestelepon = $_POST["txtTEKEEPON"]; 
$sestanggalLahir = $_POST["txtTANGGALLAHIR"];  
$_SESSION["sesNAMA"] = $sesnama;
$_SESSION["sesEMAIL"] = $sesemail;
$_SESSION["sesPESAN"] = $sespesan;
$_SESSION["sesALAMAT"] = $sesalamat;  
$_SESSION["sestelepon"] = $sestelepon; 
$_SESSION["sestanggalLahir"] = $sestanggalLahir;  
header("location: index.php"); 
?>