<?php
$name = $_POST['name_client'];
$phone = $_POST['phone_client'];


$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);


$name = urldecode($name);
$phone = urldecode($phone);


$name = trim($name);
$phone = trim($phone);


mail("4ygakk@gmail.com", "Заявка с сайта", "Имя:".$name.". Телефон: ".$phone ,"From: example2@mail.ru \r\n");
?>


<html>

<body>
	<div style="width: 351px;margin: 0 auto;text-align: center;">
		<div style="margin:0 auto">
			<h1>Спасибо! С вами свяжутся в течении 15 минут</h1>
		</div>
	</div>
</body>
</html>