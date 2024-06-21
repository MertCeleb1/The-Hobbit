<?php
include("codes/yonet.php");
?>

<div id="icerik">
    <?php
    include("codes/$dosya");
    ?></div>

<?php
if(isset($_GET["link"]))
    $link = $_GET["link"];
else
    $link="main";

switch ($link) {
    case "about":
        $dosya = "about.php";
        break;
    case "ref":
        $dosya = "ref.php";
        break;
    case "contact":
        $dosya = "contact.php";
        break;
   default:
        $dosya = "main.php";
        break;
        
}


