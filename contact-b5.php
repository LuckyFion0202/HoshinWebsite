<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<title>和杏健康管理-询问</title>


<?php

$message="姓名:".$_POST[name]."

联络电话 :".$_POST[phone]."

移动电话 :".$_POST[mobile]."

E-mail:".$_POST[email]."

问题主旨:".$_POST[subject]."

问题内容:".$_POST[message]."\n============================================================

期待您的回覆。 ";

$title="和杏健康管理-询问";
$to="507433988@qq.com"; 

mail($to,$title,$message); 

$to="$_POST[email]";

mail($to,$title,$message);



print "<script>alert('谢谢您的来信, 我们会尽快回覆!');window.location='contact.html';</script>"; 


?> 

  </head>



  <body>


</html>