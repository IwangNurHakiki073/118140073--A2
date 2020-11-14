<html>
<head>
    <title>Menentukan Kelompok Bilangan Prima</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
    if (isset($_POST['submit'])) {
      $angka = $_POST['angka'];
      $Prima = true;
      for ($a = 2; $a < $angka; $a++) {
        if ($angka % $a == 0)
          $Prima = false;
      }
        if ($Prima) {
          $hasil = "Adalah bilangan PRIMA";
        } else {
          $hasil = "BUKAN termasuk bilangan PRIMA";
        }
    }
?>

    <div class="Prima">
      <h1 class="title">Menentukan Bilangan Prima</h1>
        <form method='post' action='tugas2prima.php'>
          <input type='text' name='angka' class='angka' autocomplete='off' placeholder='Masukkan Bilangan '>
          <input type='submit' name='submit' value='Submit' class='tombol'>
        </form>
      <?php if (isset($_POST['submit'])) { ?>
        <input type="text" value="<?php echo $hasil; ?>" class="angka">
      <?php } else { ?>
        <input type="text" class="angka" autocomplete='off' placeholder='Hasil Bilangan'>
      <?php } ?>
    </div>


</body>
</html>