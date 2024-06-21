<?php
include("codes/yonet.php");
?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naruto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
    <style>
        #banner {
            background-image: url(<?php echo "img/" . $back; ?>);
        }
    </style>
</head>

<body>
    <div id="kasa">
        <div id="banner">banner</div>
        <div id="orta">
            <div id="linkler">
                <?php
                include("codes/linkler.php");
                ?>
            </div>
            <div id="icerik">
                <?php
                include("codes/$dosya");
                ?>
            </div>
            <div style="clear: both;"></div>
        </div>
        <div id="altbolum">
            <?php
            echo "<p>$footer</p>";
            ?>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>