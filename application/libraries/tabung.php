<?php
class tabung {
    function ukuran($sisi,$tinggi){
        $pi = 3.14;
        echo 'Phi : '.$pi.'<br>';
        echo 'Jari-jari '.$sisi.'<br>';
        echo 'Tinggi '.$tinggi.'<br>';
        echo 'Volume Tabung adalah '.($pi * $sisi * $sisi * $tinggi);
        echo '<br><hr>';
        echo 'Luas Permukaan Tabung adalah '.($pi * 2 * $sisi * $tinggi);
        echo '<br><hr>';
        echo 'Luas Selimut Tabung adalah '.($pi * 2 * $sisi * ($sisi + $tinggi));
    }
}