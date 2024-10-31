<?
//header('Content-Type: text/html; charset=utf-8');
print("ok");

$name = $_POST["name"];
$phone = $_POST["lastname"];
$email = trim(mb_strtolower($_POST["email"]));
$filtres = $_POST["filters"];
//mail('@yandex.ru', 'Тестовое письмо', "Привет, $userName");
//echo "Hello, $name";
