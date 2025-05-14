<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adSoyad = htmlspecialchars($_POST["adSoyad"]);
    $email = htmlspecialchars($_POST["email"]);
    $mesaj = nl2br(htmlspecialchars($_POST["mesaj"]));
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>İletişim Sonuç</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <h2 class="text-center">İletişim Bilgileriniz</h2>
    <div class="card mt-4">
      <div class="card-body">
        <p><strong>Ad Soyad:</strong> <?= $adSoyad ?></p>
        <p><strong>E-posta:</strong> <?= $email ?></p>
        <p><strong>Mesaj:</strong><br><?= $mesaj ?></p>
      </div>
    </div>
    <div class="text-center mt-3">
      <a href="iletisim.html" class="btn btn-secondary">Geri Dön</a>
    </div>
  </div>
</body>
</html>
