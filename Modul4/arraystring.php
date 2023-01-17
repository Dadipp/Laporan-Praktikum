<html>
<head>
<title>Array Urut</title>
</head>
<body>
        <?php
        $teks1 = "Pemrograman Web dengan PHP";
        print("Teks Asli $teks1 : <br>");
        $hasil = explode (" ",$teks1);
        print ("<b>Setelah explode:</b><br>");
        print_r($hasil);
        print("<br>");

        $gabung1 = implode("-",$hasil);
        $gabung2 = join ("-",$hasil);
        print("<b>Setelah implode:</b><br>");
        print_r($gabung1);
        print("<br>");
        print("<b>Setelah implode:</b><br>");
        print_r($gabung2);
        print("<br><br>");

        $teks2 = "17.7.2005";
        $apisah1 = preg_split('[/.-]',$teks2);
        print("Teks Asli: $teks2 <br>");
        print_r($apisah1);
        print("<br><br>");

        $teks3 = "PEMROGRAMAN PHP";
        $apisah2 = preg_split('//',$teks3,-1,PREG_SPLIT_NO_EMPTY);
        $banyak = sizeof($apisah2);

        print("Teks Asli: $teks3 <br>");
        print("<b>Setelah preg_split:</b><br>");
        $i=0;
        while($i<$banyak)
        {
            print($apisah2[$i]." ");
            $i++;
        }
        ?>
</body>
</html>