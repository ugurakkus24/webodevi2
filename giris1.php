<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $kullaniciadi = $_POST['kullaniciadi'];
  $sifre = $_POST['sifre'];
}

if ($kullaniciadi === "b231210102@sakarya.edu.tr" && $sifre === "b231210102") {
  header("Location: proje1basarili.html");
  exit();
}
else {
  
  header("location: errorpage.html");
  exit();
}
?>