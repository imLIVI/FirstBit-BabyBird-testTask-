<?php

namespace Lib;
require_once __DIR__ . '/../vendor/autoload.php';

var_dump($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$link = $_POST['link'];

// фильтруем строки, проверяя на недопустимые символы (защита от XSS и SQL инъекций)
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$link = filter_var($_POST['link'], FILTER_SANITIZE_URL);


$database = new Database();   
$get_id = $database->querySingle("SELECT COUNT(*) FROM saveForms;");
$database->exec("INSERT INTO saveForms (ID, username, email, link) VALUES ($get_id + 1,'$name','$email','$link')");
//header('Location: /../template/form.php');


