<?php
 $arrKecamatan = array("Gamping", "Godean", "Moyudan", "Minggir", "Seyegan", "Mlati", "Depok", "Berbah", "Prambanan", "Kalasan", "Ngemplak", "Ngaglik", "Sleman", "Tempel", "Turi", "Pakem", "Cangkringan");
 $tabel = "<table border='1'><tr><td>Nomor</td><td>Kecamatan</td></tr>";
 $i = 1;
    foreach ($arrKecamatan as $kec){
        $tabel = $tabel ."<tr><td>".$i."</td><td>".$kec."</td></tr>";
        $i++;
    
    }

    echo $tabel;
?>