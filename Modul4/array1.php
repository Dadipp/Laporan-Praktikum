<?php
    $nama_bulan=array("Januari","Februari","Maret","April","Mei","Juni",
    "Juli","Agustus","September","Oktober","November","Desember");
    $bulan_ini=$nama_bulan[date("m")-1];
    echo "Sekarang Bulan <b>$bulan_ini</b>";

?>