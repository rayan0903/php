<?php
$usr=$_REQUEST["user"];
$psd=$_REQUEST["password"];
if($usr==rayan && $psd == 33403553){
header("location: ../home.php");
}else if($usr ==monirul && $psd=monirulh353){
header("location: ../home.php");
}else if($usr ==sourove && $psd=srv91905){
    header("location: ../home.php");
}
else{
    header("location: ../index.php?password_error=Password worng !");
}

?>