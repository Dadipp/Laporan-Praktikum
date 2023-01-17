<html>
<head>
        <title> SWITCH </title>
</head>
<body>
        <?php
                $indonesia_day=date("l");
                
                Switch($indonesia_day)

                {   case "Monday":

                        $indonesia_day      =
"Senin";
                        break;
                    
                    case "Tuesday":
"Selasa";
                        break;

                    case "Wednesday":

                        $indonesia_day      =
"Rabu";
                        break;
                
                    case "Thursday":

                        $indonesia_day      =
"Kamis";
                            break;
                    
                   case "Friday":

                        $indonesia_day      =
"Jumat";
                            break;
                    
                    case "Saturday":

                        $indonesia_day      =
"Sabtu";
                        break;    
                    
                    default:

                        $indonesia_day      =
"Minggu";

                        break;

        }
        
        print ("Hari ini adalah hari $indonesia_day")
        ?>
</body>
</html>