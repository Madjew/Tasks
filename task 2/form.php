<?php
$regTel = array("options"=> array("regexp"=>'/^[\d]{6,11}$/'));
$name = strip_tags(trim($_POST['Name']));
$email = strip_tags(trim($_POST['email']));
$tel = strip_tags(trim($_POST['phone']));
$comment = strip_tags(trim($_POST['comment']));
$file = strip_tags(trim($_POST['file']));
$errorList="";
if(empty($name)){$errorList.="Name <br/>";}
if(empty($email)){$errorList.="E-mail <br/>";} elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){$errorList.="E-mail is  <b> incorrect</b> <br/>";}
if(empty($tel)){$errorList.="Number<br/>";}elseif(!filter_var($tel,FILTER_VALIDATE_REGEXP,$regTel)){$errorList.="Number is <b> incorrect</b> <br/>";}
if(empty($comment)){$errorList.="Commnet <br/>";}
if(empty($file)){$errorList.="Добавьте файл <br/>";}
if($errorList!=""){echo "PHP: <b>FAIL</b> <br/>Enter: <br/>".$errorList;}
else {echo "(PHP): <b>OK</b>";}
?>