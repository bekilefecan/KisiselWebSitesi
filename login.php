<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $sifre = trim($_POST["sifre"]);

    // E-posta ve şifre boş mu?
    if (empty($email) || empty($sifre)) {
        header("Location: login.html");
        exit();
    }

    // Geçerli e-posta mı?
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/@sakarya\.edu\.tr$/', $email)) {
        echo "<h2 style='color:red;'>❌ Geçersiz e-posta formatı!</h2>";
        echo "<a href='login.html'>Geri dön</a>";
        exit();
    }

    // E-posta adresinden kullanıcı adı çıkar
    $kullaniciAdi = explode("@", $email)[0];

    // Doğru şifre kullanıcı adının kendisi olacak (örnek: b2412100001)
    if ($sifre === $kullaniciAdi) {
        echo "<div style='margin-top:100px; text-align:center; font-family:sans-serif'>
                <h2 style='color:green;'>✅ Giriş Başarılı</h2>
                <p>Hoşgeldiniz <strong>$kullaniciAdi</strong></p>
                <a href='index.html'>Ana Sayfaya Dön</a>
              </div>";
    } else {
        echo "<div style='margin-top:100px; text-align:center; font-family:sans-serif'>
                <h2 style='color:red;'>❌ Giriş Başarısız</h2>
                <p>Şifre hatalı veya kullanıcı adı eşleşmiyor.</p>
                <a href='login.html'>Tekrar Dene</a>
              </div>";
    }
} else {
    // POST ile gelinmemişse login formuna yönlendir
    header("Location: login.html");
    exit();
}
?>


