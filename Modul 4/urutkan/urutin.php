<?php
$Data = array(	"rendang ", "mie ayam", "gulai kambing", "pepes ikan", "sate rembiga","ketoprak", "ceker pedes", "dendeng", "ayam taliwang", "bakso" );

echo "Data acak Sebelum diurutkan :<br>";
  for ($a = 0; $a < count($Data); $a++) {
    echo $a+1 . ". " . $Data[$a] . "<br>";
}

sort($Data); 

echo "<br>Data acak Setelah diurutkan :<br>";
  for ($a = 0; $a < count($Data); $a++) {
    echo $a+1 . ". " . $Data[$a] . "<br>";
}