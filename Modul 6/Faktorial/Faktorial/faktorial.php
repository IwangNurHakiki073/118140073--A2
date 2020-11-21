<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Bilangan Faktorial</title>
    <link rel="stylesheet" type="text/css" href="background.css">
</head>
    <body>
        <?php
            $n = isset($_POST['n']) ? $_POST['n'] : NULL;
            if(isset($_POST['submit'])){
                if($n!=NULL){
                        $bil = 1;
                    for($i=1;$i<=$n;$i++){
                        $bil = $bil*$i;
                    }
                }else{
                    $bil = ' Harus Ada ISINYA !';
                }
            }
            ?>
            <div class="faktorial">
            <h1 class="title">AYO MENGHITUNG FAKTORIAL </h1>
                <form method='post' action='faktorial.php'>
                <input type="text" name="n" placeholder="Masukkan Bilangan...."/>
                <input type="submit" name="submit" value="Hitung"/>
            </form>
            <?php if (isset($_POST['submit'])) { ?>
                <input type="text" value="<?php echo $bil; ?>" class="n">
            <?php } else { ?>
                <input type="text" class="n" autocomplete='off' placeholder='Hasil Bilangan'>
            <?php } 
            ?>
        </div>       
    </body>
</html>