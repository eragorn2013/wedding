<?php

/*Подключемся к БД*/
$link=mysqli_connect("server148.hosting.reg.ru", "u0322852_wedbook", "159875321Wedbook", "u0322852_wedbook");
$salt = "NBP#W5y8WP(VY***j8w95yna785yn9yn9yn9yn9yn,7fffftyftyyn9yn9yn9yn3as443n97";

/*Валидация данных*/
if(isset($_POST['name']) && !empty($_POST['name'])){
	$name=trim(htmlspecialchars($_POST['name']));
}
else{
	echo json_encode(["error"=>true, "message"=>"Введите имя"]);
	exit();
}

if(isset($_POST['phone']) && !empty($_POST['phone'])){
	$phone=trim(htmlspecialchars($_POST['phone']));
}
else{
	echo json_encode(["error"=>true, "message"=>"Введите номер телефона"]);
	exit();
}

if(isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	$email=trim(htmlspecialchars($_POST['email']));
}
else{
	echo json_encode(["error"=>true, "message"=>"Введите Email"]);
	exit();
}

if(isset($_POST['pass']) && !empty($_POST['pass'])){
	$pass=trim(htmlspecialchars($_POST['pass']));
}
else{
	echo json_encode(["error"=>true, "message"=>"Придумайте пароль"]);
	exit();
}

if(isset($_POST['passRepeat']) && !empty($_POST['passRepeat'])){
	$passRepeat=trim(htmlspecialchars($_POST['passRepeat']));
}
else{
	echo json_encode(["error"=>true, "message"=>"Введите повтор пароля"]);
	exit();
}
/*Если введенный пароль с повторным не совпадают*/
if($pass !== $passRepeat){
	echo json_encode(["error"=>true, "message"=>"Пароли не совпадают"]);
	exit();
}

/*Если такой адрес электронной почты уже есть в базе*/
$query=mysqli_query($link,"SELECT email FROM users WHERE email='{$email}'");
$response=mysqli_num_rows($query);

if($response > 0){
	echo json_encode(["error"=>true, "message"=>"Такой email уже зарегистрирован"]);
	exit();
}
/*Записываем данные в БД*/
$pass=md5($pass.$salt);
mysqli_query($link,"INSERT INTO users SET name='{$name}', phone='{$phone}', email='{$email}', pass='{$pass}'");

echo json_encode(["error"=>false, "message"=>"Регистрация прошла успешно"]);