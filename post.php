<?php
 
$adminemail="service7000@ukr.net";  // e-mail админа 

$backurl="https://online-service-miele.kiev.ua/index.html";
  // На какую страничку переходит после отправки письма 
$subject ="";

// submit1--------------------------------------------------------

if (isset($_POST['submit1'])) {
	

$subject =  "ПОДАТЬ ЗАЯВКУ НА РЕМОНТ";

 
$name=$_POST['name']; 
 
$email=$_POST['email']; 
 
$msg=$_POST['message']; 

$tell=$_POST['tell']; 
// Проверяем валидность e-mail 
if ($name==""&&$email==""&&$msg==""&&$tell=="") 
 { 
 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали не все данные!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
Имя: $name
 
Number: $tell 

E-mail: $email 
 
Сообщение: $msg
 
"; 
 
 // Отправляем письмо админу  
 
mail("$adminemail","$subject", "$msg"); 
 
// Выводим сообщение пользователю 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
//--></script> 
 
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  

 
 
 } 

}

// submit2 submit4 submit5--------------------------------------------------------

if (isset($_POST['submit2'])){
$subject =  "ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ";

}else if (isset($_POST['submit4'])){
$subject =  "СВЯЗАТЬСЯ С НАМИ";

}else if (isset($_POST['submit5'])) {
	
$subject =  "ВЫЗВАТЬ МАСТЕРА";
//---------------------------------------------------------------------- // 
}
if (isset($_POST['submit2'])||isset($_POST['submit4'])||isset($_POST['submit5'])) {
  
// Принимаем данные с формы 
 
$name=$_POST['name']; 
 
$msg=$_POST['message']; 

$tell=$_POST['tell']; 
// Проверяем валидность e-mail 
if ($name==""&&$msg==""&&$tell=="") 
 { 
 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали не все данные!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
Имя: $name
 
Number: $tell 
 
Сообщение: $msg
 
"; 
 
 // Отправляем письмо админу  
 
mail("$adminemail","$subject", "$msg"); 
 
// Выводим сообщение пользователю 
 print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
//--></script> 
 
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  

 } 

}

// submit3----------------------------------------------
if (isset($_POST['submit3'])) {
	

$subject =  "БЫСТРАЯ ЗАЯВКА";

 
$name=$_POST['name']; 
 
$msg=$_POST['message']; 

$tell=$_POST['tell']; 
// Проверяем валидность e-mail 
if ($name==""&&$tell=="") 
 { 
 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали не все данные!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
Имя: $name
 
Number: $tell 
 
Сообщение: $msg
 
"; 
 
 // Отправляем письмо админу  
 
mail("$adminemail","$subject", "$msg"); 
 
// Выводим сообщение пользователю 
 print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
//--></script> 
 
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  

 } 

}



// submit6----------------------------------------------
if (isset($_POST['submit6'])) {
	

$subject =  "ЗАДАЙТЕ СВОЙ ВОПРОС";

 
$name=$_POST['name']; 
 
$email=$_POST['email']; 
 
$msg=$_POST['message']; 

$tema=$_POST['tema']; 
// Проверяем валидность e-mail 
if ($name==""&&$email==""&&$msg==""&&$tema=="") 
 { 
 

  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали не все данные!"; 
 
  } 
 
 else 
 
 { 
 
 
$msg=" 
 
Имя: $name
 
Theme: $tema 

E-mail: $email 
 
Сообщение: $msg
 
"; 
 
 // Отправляем письмо админу  
 
mail("$adminemail","$subject", "$msg"); 
 
// Выводим сообщение пользователю 
 print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 2000); 
//--></script> 
 
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  

 
 } 

}


?>