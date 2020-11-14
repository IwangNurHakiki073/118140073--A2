<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS praktikum 2 KAKULAKTOR</title>
    <link rel="stylesheet" type="text/css" href="calcu.css">
</head>

<body>
    <div class="header">
        <h2 class="title">Ayo Menghitung</h2>
        <form method="post" action=""> 
            <input type="text" name="Bila1" class="Bil" placeholder=" Masukkan Bilangan 1" required/>
            <input type="text" name="Bila2" class="Bil" placeholder="Masukkan Bilangan 2" required/>
            <select class="oprs" name="Operasi">
                <option value="pilih">Pilih</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol"/> 
            <a href="./" style="text-decoration:none;">  
</form>

<?php 
        if(isset($_POST['hitung'])){
            $Bila1    =$_POST['Bila1'];
            $Bila2    =$_POST['Bila2'];
            $Operasi=$_POST['Operasi'];
        
            switch ($Operasi) {
                case 'kali':
                $hasil = $Bila1*$Bila2;
                break;
                case 'bagi':
                $hasil = $Bila1/$Bila2;
                break; case 'tambah':
                $hasil = $Bila1+$Bila2;
                break;
                case 'kurang':
                $hasil = $Bila1-$Bila2; break; 
            }
        }
    ?>
	   </form>
        <?php if(isset($_POST['hitung'])){
        ?>
            <input type="text" value="<?php echo $hasil; ?>" class="hasil"/>
        <?php
        }
        else{
        ?>
            <input type="text" value="0" class="hasil"/>
        <?php
        }
        ?> 
    </div>
	
	</body>
</html>