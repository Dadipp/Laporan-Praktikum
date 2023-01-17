<?php
$data=@array(
    array(judul => "Keamanan Jaringan Internet",Pengarang => "Onno W Purbo",),
    array(judul => "Pengenalan SQL",Pengarang => "Sri Wahyuni",),
    array(judul => "Network Security",Pengarang => "Tom Thomas",),
);
echo"Array Multidimensi<br><br>";
foreach($data as $val)
{
foreach($val as $key => $data2)
    {
        echo "$key : $data2 <br>";
    }
echo "<br>";
}