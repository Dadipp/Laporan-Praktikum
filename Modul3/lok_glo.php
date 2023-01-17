<html>
<head>
        <title> VARIABLE LOKAL DAN GLOBAL</title>

</head>
<body>
    <?php
                Function printklub ($NamaKlub)
                {
                    Print ("Klub Sepak bola adalah $NamaKlub <BR> \n");
                }
                    Function MitraSby ()
                {/* Variable Lokal */
                        $NamaKlub="Mitra Surabaya";
                        printKlub($NamaKlub);
                }
                    Function persija ()
                {/* Variable Lokal */
                        $NamaKlub="Persija";
                        printKlub($NamaKlub);}
                    Function Forever ()
                {/* Variable Lokal */
                        $NamaKlub="AC milan";
                        printKlub($NamaKlub);
                }
    /* Variable Global */
    $NamaKlub = "AC Milan";
    Forever();
    MitraSby();
    Persija();
    Forever();
    ?>
</body>
</html>