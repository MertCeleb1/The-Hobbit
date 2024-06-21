<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sonucu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Sonucu</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>Adınız: " . $name . "</h5>";
            echo "<p class='card-text'>E-posta: " . $email . "</p>";
            echo "<p class='card-text'>Telefon: " . $phone . "</p>";
            echo "<p class='card-text'>Mesajınız: " . nl2br($message) . "</p>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<p class='text-danger'>Geçersiz istek.</p>";
        }
        ?>
        <a href="index.html" class="btn btn-secondary mt-3">Geri Dön</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>