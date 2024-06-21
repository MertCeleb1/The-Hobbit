<?php
if (isset($_GET["link"]))
    $link = $_GET["link"];
else
    $link = "main";

$back = "bir1.jpg";
$footer = "© BU sitenin her haklı saklır.";
switch ($link) {
    case "about":
        $back = "iki2.jpg";
        $footer = "Uzumaki Naruto bir Efsanedir.";
    case "contact":
        $back = "uc3.jpg";
    case "tabloyap":
    case "ref":
        $dosya = "$link.php";
        break;
    default:
        $dosya = "main.php";
        break;
}
