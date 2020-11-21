<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>PESAN BED NAMA</h2>
           <form action="" method="POST">
               <input type="text" name="nama" placeholder="Masukan nama.......">
               <select  name="Warna">
               <option value="red">Pilih Warna</option>
                <option value="red">Red</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="black">Black</option>
                <option value="blue">Blue</option>
                <option value="grey">Grey</option>
                <option value="gold">Gold</option>
                <option value="aqua">Aqua</option>
            </select>
               <input type='submit' name='submit'>
           </form>

           <?php
            function Nama ($nama){
                $Name = str_replace(' ', '', $nama);
                if (strlen($Name) <= 10){
                    $harga = strlen($Name)*300;
                } else if (strlen($Name) > 10 && strlen($Name) <= 20) {
                    $harga = strlen($Name)*500;
                } else {
                    $harga = strlen($Name)*700;
                }
                return $harga;
            }

            function Warna($color="red",$nama){
                echo'<br><br>';
                echo 'Nama dan Warna Pilihan : <font color="'.$color.'"> '.$nama.'</font>';
            }

            if(isset($_POST['submit'])){
                $nama = $_POST['nama'];
                $Warna = $_POST['Warna'];
               
                switch($Warna){
                    case 'red' :
                        Warna('red',$nama);
                    break;
                    case 'yellow' :
                        Warna('yellow',$nama);
                    break;
                    case 'green':
                        Warna('green',$nama);
                    break;
                    case 'black' :
                        Warna('black',$nama);
                    break;
                    case 'blue' :
                        Warna('blue',$nama);
                    break;
                    case 'grey' :
                        Warna('grey',$nama);
                    break;
                    case 'gold' :
                        Warna('gold',$nama);
                    break;
                    case 'aqua' :
                        Warna('aqua',$nama);
                    break;
                    default :
                        Warna('red',$nama);
                }
                echo "<br><br>";
                echo "Jumlah yang harus dibayar sebesar Rp.".Nama($nama).'-,';
            }
            ?>
        </div>
    </body>  
</html>