<?php

$recepient = "sasha.sukhanov.99@mail.ru";
$sitename = "Torto-Mash";

$text = trim($_POST["text"]);
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);

$message = "Имя: $name \nТелефон: $phone \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>