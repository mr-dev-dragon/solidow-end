
<?php

    global $total;
    global $Total_TVA;
    global $sous_total;
    $tranche = 0;
    global $consomation;
    global $redevnce;
    global $calibre;
    global $Taxes;
    global $MontantHT ;
    global $numtranche;
    global $key;
    global $AncienI;
    global $NouvelI;
    global $tarif;

    echo "<style> 
        #tranche2{
            display: none;
        }
     </style>";
    
    if (isset ( $_POST["submit"])) {
       
        $NouvelI = $_POST["NI"];
        $AncienI = $_POST["AI"];
        $calibre = $_POST["calibre"];
        $consomation = $NouvelI - $AncienI;

        $TVA = 0.14 ; 
        $timbre = 0.45;
        $numtranche;
        $calibre = $_POST["calibre"];
        $tranche1 = 0.794;
        $tranche2 = 0.883;
        $tranche3 = 0.9451;
        $tranche4 = 1.0489;
        $tranche5 = 1.2915;
        $tranche6 = 1.4975;
        

        //tranche 1 (0-100kwh) 
        if ($consomation <= 100){

          

            $tarif = 0.794;
            $tranche = $consomation * $tranche1;
            $MontantHT = $tranche + $calibre;
            $Total_TVA = $tranche * $TVA ;
            $redevnce = $calibre * $TVA;
            $Taxes = $redevnce + $Total_TVA;
            $sous_total = $Taxes + $timbre; 
            $total = $MontantHT + $sous_total;
            $numtranche = 1;
            echo "<style> 
                #tranche2{
                    display: none;
                }
             </style>";
        }
        //tranche 2 (101-150kwh) 
        if ($consomation <=150 && $consomation >= 101){

            echo "<style> 
            #tranche2{
                display: block;
            }
            </style>";

            $tarif = 0.794;
            $tarif2 =  0.883;
            $tra = 100;
            $B = $consomation - 100 ;

            $tranche = 100 * $tranche1;
            $demo = $B * $tranche2;

            $Total_TVA = $tranche * $TVA ;
            $Total_TVA2 = $demo * $TVA;

            $redevnce = $calibre * $TVA;
            $Taxes = $redevnce + $Total_TVA + $Total_TVA2;
            $sous_total = $Taxes + $timbre; 
            $MontantHT = $tranche + $demo +  $calibre;
            $total = $MontantHT + $sous_total;
            $numtranche = 1;

            

            // echo ($consomation -100) * $tranche2 + $demo;
        }
        //tranche 3 (151-210kwh) 
        if ($consomation <= 210 && $consomation >= 151){

            $tarif = 0.9451;
            $tranche = $consomation * $tranche3;
            $MontantHT = $tranche + $calibre;
            $Total_TVA = $tranche  * $TVA ;
            $redevnce = $calibre * $TVA;
            $Taxes = $redevnce + $Total_TVA;
            $sous_total = $Taxes + $timbre; 
          
            $total = $MontantHT + $sous_total;
            $numtranche = 3;
            echo "<style> 
            #tranche2{
                display: none;
            }
         </style>";

        } 
        //tranche 4 (211-310kwh) 
        if ($consomation <= 310 && $consomation >= 211){

            $tarif = 0.0489;
            $tranche = $consomation * $tranche4;
            $MontantHT = $tranche + $calibre;
            $Total_TVA = $tranche  * $TVA ;
            $redevnce = $calibre * $TVA;
            $Taxes = $redevnce + $Total_TVA;
            $sous_total = $Taxes + $timbre; 
          
            $total = $MontantHT + $sous_total;
            $numtranche = 4;
            echo "<style> 
            #tranche2{
                display: none;
            }
         </style>";
        }
        //tranche 5 (311-510kwh)
        if ( $consomation <= 510 && $consomation >= 311){

            $tarif = 1.2915;
            $tranche = $consomation * $tranche5;
            $MontantHT = $tranche + $calibre;
            $Total_TVA = $tranche  * $TVA ;
            $redevnce = $calibre * $TVA;
            $Taxes = $redevnce + $Total_TVA;
            $sous_total = $Taxes + $timbre; 
          
            $total = $MontantHT + $sous_total;
            $numtranche = 5;
            echo "<style> 
            #tranche2{
                display: none;
            }
         </style>";
        } 
        //tranche 6 (>511kwh)
        if ($consomation >= 511 ){

            $tarif = 1.4975;
            $tranche = $consomation * $tranche6;
            $MontantHT = $tranche + $calibre;
            $Total_TVA = $tranche  * $TVA ;
            $redevnce = $calibre * $TVA;
            $Taxes = $redevnce + $Total_TVA;
            $sous_total = $Taxes + $timbre; 
          
            $total = $MontantHT + $sous_total;
            $numtranche = 6;
            echo "<style> 
            #tranche2{
                display: none;
            }
         </style>";
        }
       
}

?>