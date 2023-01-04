<?php include("koneksi/koneksi.php");
if (isset($_GET["include"])) {
  $include = $_GET["include"];
}
?>
<!doctype html>
<html lang="en">

<head>
  <?php include("includes/head.php"); ?>
</head>

<body>
  <?php include("includes/navigasi.php"); ?>

  <?php
  //pemanggilan konten halaman index
  if (isset($_GET["include"])) {
    $include = $_GET["include"];
    //buku
    if ($include == "detail-buku") {
      include("include/detailbuku.php");
    } else if ($include == "about-us") {
      include("include/aboutus.php");
    } else if ($include == "berita") {
      include("include/berita.php");
    } else if ($include == "detail-berita") {
      include("include/detailberita.php");
    } else if ($include == "kontak") {
      include("include/kontak.php");
    } else if ($include == "galeri") {
      include("include/galeri.php");
    } else if ($include == "index") {
      include("include/index.php");
    } else {
      include("include/index.php");
    }
  } else {
    include("include/index.php");
  }
  ?>

  <?php include("includes/footer.php"); ?>

  <!-- Optional JavaScript; choose one of the two! -->
  <?php include("includes/script.php"); ?>
</body>

</html>