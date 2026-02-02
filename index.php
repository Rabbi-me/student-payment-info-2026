<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY Student Table</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
            margin: 0;
            padding: 20px;
            font-size: 93%;
        }
        h1 {
            text-transform: capitalize;
            text-align: center;
            color: #333;
            font-weight: 900;
        }
        table {
            
            border: 2px black solid;
            width: 100%;
            margin: 20px auto;
            border-collapse: separate;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-transform: capitalize;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
            font-weight: bold;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: null;
        }
        tr{
            transition: 0.50s;
        }
        tr:hover {
            background-color:rgb(82, 223, 86);
            color: red;
        }
        /* tr:nth-child(even) {
            background-color: #f9f9f9;
        } */
    </style>
</head>
<body>

    <h1>Tuition Fee Analysis - 2026</h1>

    <?php
                        // ALL MONTH VALUE




                        $AS  =   600; 
                        $SA  =   600; 
                        $SAB =   300; 
                        $RA  =   400; 
                        $SAM =   400; 
                        $JI  =   400; 
                        $EB  =   400; 
                        $EM  =   400; 
                        $YA  =   300; 
                        $MA  =   300; 
                        $SU  =   300; 
                        $MO  =   300; 
                        $HA  =   200; 
                        $KA  =   200; 
                        $AB  =   200; 
                        $MAO =   3000;
                        $MONTH = $AS+$SA+$SAB+$RA+$SAM+$JI+$EB+$EM+$YA+$MA+$SU+$MO+$HA+$KA+$AB+$MAO;



                            //student der masher beton//
                                  //asiya                       sabbir                           sabia                           rafia        
                        /*JAN */  $asiya1= 500;           /*JAN */ $sabbir1= 600;        /*JAN */  $sabia1= 300;         /*JAN */ $rafia1= null;         
                        /*FAB */  $asiya2= null;          /*FAB */ $sabbir2= null;       /*FAB */  $sabia2= null;        /*FAB */ $rafia2= null;         
                        /*MAR */  $asiya3= null;          /*MAR */ $sabbir3= null;       /*MAR */  $sabia3= null;        /*MAR */ $rafia3= null;         
                        /*APR */  $asiya4= null;          /*APR */ $sabbir4= null;       /*APR */  $sabia4= null;        /*APR */ $rafia4= null;         
                        /*MAY */  $asiya5= null;          /*MAY */ $sabbir5= null;       /*MAY */  $sabia5= null;        /*MAY */ $rafia5= null;         
                        /*JUN */  $asiya6= null;          /*JUN */ $sabbir6= null;       /*JUN */  $sabia6= null;        /*JUN */ $rafia6= null;         
                        /*JUL */  $asiya7= null;          /*JUL */ $sabbir7= null;       /*JUL */  $sabia7= null;        /*JUL */ $rafia7= null;         
                        /*AUG */  $asiya8= null;          /*AUG */ $sabbir8= null;       /*AUG */  $sabia8= null;        /*AUG */ $rafia8= null;         
                        /*SEP */  $asiya9= null;          /*SEP */ $sabbir9= null;       /*SEP */  $sabia9= null;        /*SEP */ $rafia9= null;         
                        /*OCT */  $asiya10=null;          /*OCT */ $sabbir10= null;      /*OCT */  $sabia10= null;       /*OCT */ $rafia10= null;         
                        /*NOV */  $asiya11= null;         /*NOV */ $sabbir11= null;      /*NOV */  $sabia11= null;       /*NOV */ $rafia11= null;         
                        /*DEC */  $asiya12= null;         /*DEC */ $sabbir12= null;      /*DEC */  $sabia12= null;       /*DEC */ $rafia12= null;         


                                  //mahim                      moriom                            jishan                          ebrahim                                        
                        /*JAN */ $mahim1= null;          /*JAN */   $moriom1= 300;        /*JAN */ $jishan1= 400;          /*JAN */ $ebrahim1= 400;                
                        /*FAB */ $mahim2= null;          /*FAB */   $moriom2= null;       /*FAB */ $jishan2= null;         /*FAB */ $ebrahim2= null;              
                        /*MAR */ $mahim3= null;          /*MAR */   $moriom3= null;       /*MAR */ $jishan3= null;         /*MAR */ $ebrahim3= null;              
                        /*APR */ $mahim4= null;          /*APR */   $moriom4= null;       /*APR */ $jishan4= null;         /*APR */ $ebrahim4= null;              
                        /*MAY */ $mahim5= null;          /*MAY */   $moriom5= null;       /*MAY */ $jishan5= null;         /*MAY */ $ebrahim5= null;              
                        /*JUN */ $mahim6= null;          /*JUN */   $moriom6= null;       /*JUN */ $jishan6= null;         /*JUN */ $ebrahim6= null;              
                        /*JUL */ $mahim7= null;          /*JUL */   $moriom7= null;       /*JUL */ $jishan7= null;         /*JUL */ $ebrahim7= null;              
                        /*AUG */ $mahim8= null;          /*AUG */   $moriom8= null;       /*AUG */ $jishan8= null;         /*AUG */ $ebrahim8= null;              
                        /*SEP */ $mahim9= null;          /*SEP */   $moriom9= null;       /*SEP */ $jishan9= null;         /*SEP */ $ebrahim9= null;              
                        /*OCT */ $mahim10= null;         /*OCT */   $moriom10= null;      /*OCT */ $jishan10= null;        /*OCT */ $ebrahim10= null;         
                        /*NOV */ $mahim11= null;         /*NOV */   $moriom11= null;      /*NOV */ $jishan11= null;        /*NOV */ $ebrahim11= null;              
                        /*DEC */ $mahim12= null;         /*DEC */   $moriom12= null;      /*DEC */ $jishan12= null;        /*DEC */ $ebrahim12= null;       


                        //     hapsa                        kausar                                       abdullah                      Office
                        /*JAN */  $hapsa1= null;         /*JAN */  $kausar1= null;        /*JAN */  $abdullah1= null;      /*JAN */  $office1= null; 
                        /*FAB */  $hapsa2= null;         /*FAB */  $kausar2= null;        /*FAB */  $abdullah2= null;      /*FAB */  $office2= null; 
                        /*MAR */  $hapsa3= null;         /*MAR */  $kausar3= null;        /*MAR */  $abdullah3= null;      /*MAR */  $office3= null; 
                        /*APR */  $hapsa4= null;         /*APR */  $kausar4= null;        /*APR */  $abdullah4= null;      /*APR */  $office4= null; 
                        /*MAY */  $hapsa5= null;         /*MAY */  $kausar5= null;        /*MAY */  $abdullah5= null;      /*MAY */  $office5= null; 
                        /*JUN */  $hapsa6= null;         /*JUN */  $kausar6= null;        /*JUN */  $abdullah6= null;      /*JUN */  $office6= null; 
                        /*JUL */  $hapsa7= null;         /*JUL */  $kausar7= null;        /*JUL */  $abdullah7= null;      /*JUL */  $office7= null; 
                        /*AUG */  $hapsa8= null;         /*AUG */  $kausar8= null;        /*AUG */  $abdullah8= null;      /*AUG */  $office8= null; 
                        /*SEP */  $hapsa9= null;         /*SEP */  $kausar9= null;        /*SEP */  $abdullah9= null;      /*SEP */  $office9= null; 
                        /*OCT */  $hapsa10= null;        /*OCT */  $kausar10= null;       /*OCT */  $abdullah10= null;     /*OCT */  $office10= null;
                        /*NOV */  $hapsa11= null;        /*NOV */  $kausar11= null;       /*NOV */  $abdullah11= null;     /*NOV */  $office11= null;
                        /*DEC */  $hapsa12= null;        /*DEC */  $kausar12= null;       /*DEC */  $abdullah12= null;     /*DEC */  $office12= null;

                        //       samia                             yasin                         sumaiya                        emran
                        /*JAN */  $samia1= null;         /*JAN */  $yasin1= null;         /*JAN */  $sumaiya1= null;       /*JAN */  $emran1= 400;  
                        /*FAB */  $samia2= null;         /*FAB */  $yasin2= null;         /*FAB */  $sumaiya2= null;       /*FAB */  $emran2= null; 
                        /*MAR */  $samia3= null;         /*MAR */  $yasin3= null;         /*MAR */  $sumaiya3= null;       /*MAR */  $emran3= null; 
                        /*APR */  $samia4= null;         /*APR */  $yasin4= null;         /*APR */  $sumaiya4= null;       /*APR */  $emran4= null; 
                        /*MAY */  $samia5= null;         /*MAY */  $yasin5= null;         /*MAY */  $sumaiya5= null;       /*MAY */  $emran5= null; 
                        /*JUN */  $samia6= null;         /*JUN */  $yasin6= null;         /*JUN */  $sumaiya6= null;       /*JUN */  $emran6= null; 
                        /*JUL */  $samia7= null;         /*JUL */  $yasin7= null;         /*JUL */  $sumaiya7= null;       /*JUL */  $emran7= null; 
                        /*AUG */  $samia8= null;         /*AUG */  $yasin8= null;         /*AUG */  $sumaiya8= null;       /*AUG */  $emran8= null; 
                        /*SEP */  $samia9= null;         /*SEP */  $yasin9= null;         /*SEP */  $sumaiya9= null;       /*SEP */  $emran9= null; 
                        /*OCT */  $samia10= null;        /*OCT */  $yasin10= null;        /*OCT */  $sumaiya10= null;      /*OCT */  $emran10= null;
                        /*NOV */  $samia11= null;        /*NOV */  $yasin11= null;        /*NOV */  $sumaiya11= null;      /*NOV */  $emran11= null;
                        /*DEC */  $samia12= null;        /*DEC */  $yasin12= null;        /*DEC */  $sumaiya12= null;      /*DEC */  $emran12= null;
                        

                        $total1= $asiya1 + $sabbir1 + $rafia1 + $samia1 + $sabia1 + $mahim1 + $yasin1 + $jishan1 + $moriom1 + $ebrahim1 + $sumaiya1 + $emran1 + $hapsa1 + $kausar1 + $abdullah1 + $office1;
                        $total2= $asiya2 + $sabbir2 + $rafia2 + $samia2 + $sabia2 + $mahim2 + $yasin2 + $jishan2 + $moriom2 + $ebrahim2 + $sumaiya2 + $emran2 + $hapsa2 + $kausar2 + $abdullah2 + $office2;
                        $total3= $asiya3 + $sabbir3 + $rafia3 + $samia3 + $sabia3 + $mahim3 + $yasin3 + $jishan3 + $moriom3 + $ebrahim3 + $sumaiya3 + $emran3 + $hapsa3 + $kausar3 + $abdullah3 + $office3;
                        $total4= $asiya4 + $sabbir4 + $rafia4 + $samia4 + $sabia4 + $mahim4 + $yasin4 + $jishan4 + $moriom4 + $ebrahim4 + $sumaiya4 + $emran4 + $hapsa4 + $kausar4 + $abdullah4 + $office4;
                        $total5= $asiya5 + $sabbir5 + $rafia5 + $samia5 + $sabia5 + $mahim5 + $yasin5 + $jishan5 + $moriom5 + $ebrahim5 + $sumaiya5 + $emran5 + $hapsa5 + $kausar5 + $abdullah5 + $office5;
                        $total6= $asiya6 + $sabbir6 + $rafia6 + $samia6 + $sabia6 + $mahim6 + $yasin6 + $jishan6 + $moriom6 + $ebrahim6 + $sumaiya6 + $emran6 + $hapsa6 + $kausar6 + $abdullah6 + $office6;
                        $total7= $asiya7 + $sabbir7 + $rafia7 + $samia7 + $sabia7 + $mahim7 + $yasin7 + $jishan7 + $moriom7 + $ebrahim7 + $sumaiya7 + $emran7 + $hapsa7 + $kausar7 + $abdullah7 + $office7;
                        $total8= $asiya8 + $sabbir8 + $rafia8 + $samia8 + $sabia8 + $mahim8 + $yasin8 + $jishan8 + $moriom8 + $ebrahim8 + $sumaiya8 + $emran8 + $hapsa8 + $kausar8 + $abdullah8 + $office8;
                        $total9= $asiya9 + $sabbir9 + $rafia9 + $samia9 + $sabia9 + $mahim9 + $yasin9 + $jishan9 + $moriom9 + $ebrahim9 + $sumaiya9 + $emran9 + $hapsa9 + $kausar9 + $abdullah9 + $office9;
                        $total10= $asiya10 + $sabbir10 + $rafia10 + $samia10 + $sabia10 + $mahim10 + $yasin10 + $jishan10 + $moriom10 + $ebrahim10 + $sumaiya10 + $emran10 + $hapsa10 + $kausar10 + $abdullah10 + $office10;
                        $total11= $asiya11 + $sabbir11 + $rafia11 + $samia11 + $sabia11 + $mahim11 + $yasin11 + $jishan11 + $moriom11 + $ebrahim11 + $sumaiya11 + $emran11 + $hapsa11 + $kausar11 + $abdullah11 + $office11;
                        $total12= $asiya12 + $sabbir12 + $rafia12 + $samia12 + $sabia12 + $mahim12 + $yasin12 + $jishan12 + $moriom12 + $ebrahim12 + $sumaiya12 + $emran12 + $hapsa12 + $kausar12 + $abdullah12 + $office12;
                        
        // ডেটা অ্যারে
        $users = [
            ["id" => 1, "name" => "asiya                  [$AS]",    "january" => $asiya1,     "february" =>$asiya2 ,      "march"=> $asiya3,      "april"=> $asiya4,      "may"=> $asiya5,      "june"=> $asiya6,      "july"=>$asiya7,      "august"=> $asiya8,      "september"=> $asiya9,       "october"=>$asiya10,      "november"=>$asiya11,      "december"=> $asiya12,       "total"=>$asiya1+$asiya2+$asiya3+$asiya4+$asiya5+$asiya6+$asiya7+$asiya8+$asiya9+$asiya10+$asiya11+$asiya12],
            ["id" => 2, "name" => "sabbir                 [$SA]",    "january" => $sabbir1,    "february" =>$sabbir2 ,     "march"=> $sabbir3,     "april"=> $sabbir4,     "may"=> $sabbir5,     "june"=> $sabbir6,     "july"=>$sabbir7,     "august"=> $sabbir8,     "september"=> $sabbir9,      "october"=>$sabbir10,     "november"=>$sabbir11,     "december"=> $sabbir12,      "total"=>$sabbir1+$sabbir2+$sabbir3+$sabbir4+$sabbir5+$sabbir6+$sabbir7+$sabbir8+$sabbir9+$sabbir10+$sabbir11+$sabbir12],
            ["id" => 3, "name" => "jishan                 [$JI]",    "january" => $jishan1,    "february" =>$jishan2 ,     "march"=> $jishan3,     "april"=> $jishan4,     "may"=> $jishan5,     "june"=> $jishan6,     "july"=>$jishan7,     "august"=> $jishan8,     "september"=> $jishan9,      "october"=>$jishan10,     "november"=>$jishan11,     "december"=> $jishan12,      "total"=>$jishan1+$jishan2+$jishan3+$jishan4+$jishan5+$jishan6+$jishan7+$jishan8+$jishan9+$jishan10+$jishan11+$jishan12],
            ["id" => 4, "name" => "rafia                  [$RA]",    "january" => $rafia1,     "february" =>$rafia2 ,      "march"=> $rafia3,      "april"=> $rafia4,      "may"=> $rafia5,      "june"=> $rafia6,      "july"=>$rafia7,      "august"=> $rafia8,      "september"=> $rafia9,       "october"=>$rafia10,      "november"=>$rafia11,      "december"=> $rafia12,       "total"=>$rafia1+$rafia2+$rafia3+$rafia4+$rafia5+$rafia6+$rafia7+$rafia8+$rafia9+$rafia10+$rafia11+$rafia12],
            ["id" => 5, "name" => "samia                  [$SAM]",   "january" => $samia1,     "february" =>$samia2 ,      "march"=> $samia3,      "april"=> $samia4,      "may"=> $samia5,      "june"=> $samia6,      "july"=>$samia7,      "august"=> $samia8,      "september"=> $samia9,       "october"=>$samia10,      "november"=>$samia11,      "december"=> $samia12,       "total"=>$samia1+$samia2+$samia3+$samia4+$samia5+$samia6+$samia7+$samia8+$samia9+$samia10+$samia11+$samia12],
            ["id" => 6, "name" => "yasin                  [$YA]",    "january" => $yasin1,     "february" =>$yasin2 ,      "march"=> $yasin3,      "april"=> $yasin4,      "may"=> $yasin5,      "june"=> $yasin6,      "july"=>$yasin7,      "august"=> $yasin8,      "september"=> $yasin9,       "october"=>$yasin10,      "november"=>$yasin11,      "december"=> $yasin12,       "total"=>$yasin1+$yasin2+$yasin3+$yasin4+$yasin5+$yasin6+$yasin7+$yasin8+$yasin9+$yasin10+$yasin11+$yasin12],
            ["id" => 7, "name" => "mahim                  [$MA]",    "january" => $mahim1,     "february" =>$mahim2 ,      "march"=> $mahim3,      "april"=> $mahim4,      "may"=> $mahim5,      "june"=> $mahim6,      "july"=>$mahim7,      "august"=> $mahim8,      "september"=> $mahim9,       "october"=>$mahim10,      "november"=>$mahim11,      "december"=> $mahim12,       "total"=>$mahim1+$mahim2+$mahim3+$mahim4+$mahim5+$mahim6+$mahim7+$mahim8+$mahim9+$mahim10+$mahim11+$mahim12],
            ["id" => 8, "name" => "sabia                  [$SAB]",   "january" => $sabia1,     "february" =>$sabia2 ,      "march"=> $sabia3,      "april"=> $sabia4,      "may"=> $sabia5,      "june"=> $sabia6,      "july"=>$sabia7,      "august"=> $sabia8,      "september"=> $sabia9,       "october"=>$sabia10,      "november"=>$sabia11,      "december"=> $sabia12,       "total"=>$sabia1+$sabia2+$sabia3+$sabia4+$sabia5+$sabia6+$sabia7+$sabia8+$sabia9+$sabia10+$sabia11+$sabia12],
            ["id" => 9, "name" => "moriom                 [$MA]",    "january" => $moriom1,    "february" =>$moriom2 ,     "march"=> $moriom3,     "april"=> $moriom4,     "may"=> $moriom5 ,    "june"=> $moriom6,     "july"=>$moriom7,     "august"=> $moriom8,     "september"=> $moriom9,      "october"=>$moriom10,     "november"=>$moriom11,     "december"=> $moriom12,      "total"=>$moriom1+$moriom2+$moriom3+$moriom4+$moriom5+$moriom6+$moriom7+$moriom8+$moriom9+$moriom10+$moriom11+$moriom12],
            ["id" => 10, "name" => "ebrahim               [$EB]",    "january" => $ebrahim1,   "february" =>$ebrahim2 ,    "march"=> $ebrahim3,    "april"=> $ebrahim4,    "may"=> $ebrahim5,    "june"=> $ebrahim6,    "july"=>$ebrahim7,    "august"=> $ebrahim8,    "september"=> $ebrahim9,     "october"=>$ebrahim10,    "november"=>$ebrahim11,    "december"=> $ebrahim12,     "total"=>$ebrahim1+$ebrahim2+$ebrahim3+$ebrahim4+$ebrahim5+$ebrahim6+$ebrahim7+$ebrahim8+$ebrahim9+$ebrahim10+$ebrahim11+$ebrahim12],
            ["id" => 11, "name" => "sumaiya               [$SU]",    "january" => $sumaiya1,   "february" =>$sumaiya2 ,    "march"=> $sumaiya3,    "april"=> $sumaiya4,    "may"=> $sumaiya5,    "june"=> $sumaiya6,    "july"=>$sumaiya7,    "august"=> $sumaiya8,    "september"=> $sumaiya9,     "october"=>$sumaiya10,    "november"=>$sumaiya11,    "december"=> $sumaiya12,     "total"=>$sumaiya1+$sumaiya2+$sumaiya3+$sumaiya4+$sumaiya5+$sumaiya6+$sumaiya7+$sumaiya8+$sumaiya9+$sumaiya10+$sumaiya12],
            ["id" => 12, "name" => "emran                 [$EM]",    "january" => $emran1,     "february" =>$emran2 ,      "march"=> $emran3,      "april"=> $emran4,      "may"=> $emran5,      "june"=> $emran6,      "july"=>$emran7,      "august"=> $emran8,      "september"=> $emran9,       "october"=>$emran10,      "november"=>$emran11,      "december"=> $emran12,       "total"=>$emran1+$emran2+$emran3+$emran4+$emran5+$emran6+$emran7+$emran8+$emran9+$emran10+$emran12],
            ["id" => 13, "name" => "hapsa                 [$HA]",    "january" => $hapsa1,     "february" =>$hapsa2 ,      "march"=> $hapsa3,      "april"=> $hapsa4,      "may"=> $hapsa5,      "june"=> $hapsa6,      "july"=>$hapsa7,      "august"=> $hapsa8,      "september"=> $hapsa9,       "october"=>$hapsa10,      "november"=>$hapsa11,      "december"=> $hapsa12,       "total"=>$hapsa1+$hapsa2+$hapsa3+$hapsa4+$hapsa5+$hapsa6+$hapsa7+$hapsa8+$hapsa9+$hapsa10+$hapsa12],
            ["id" => 14, "name" => "kausar                [$KA]",    "january" => $kausar1,    "february" =>$kausar2 ,     "march"=> $kausar3,     "april"=> $kausar4,     "may"=> $kausar5,     "june"=> $kausar6,     "july"=>$kausar7,     "august"=> $kausar8,     "september"=> $kausar9,      "october"=>$kausar10,     "november"=>$kausar11,     "december"=> $kausar12,      "total"=>$kausar1+$kausar2+$kausar3+$kausar4+$kausar5+$kausar6+$kausar7+$kausar8+$kausar9+$kausar10+$kausar12],
            ["id" => 15, "name" => "abdullah              [$AB]",    "january" => $abdullah1,  "february" =>$abdullah2 ,   "march"=> $abdullah3,   "april"=> $abdullah4,   "may"=> $abdullah5,   "june"=> $abdullah6,   "july"=>$abdullah7,   "august"=> $abdullah8,   "september"=> $abdullah9,    "october"=>$abdullah10,   "november"=>$abdullah11,   "december"=> $abdullah12,    "total"=>$abdullah1+$abdullah2+$abdullah3+$abdullah4+$abdullah5+$abdullah6+$abdullah7+$abdullah8+$abdullah9+$abdullah10+$abdullah12],
            ["id" => 16, "name" => "office                [$MAO]",   "january" => $office1,    "february" =>$office2 ,     "march"=> $office3,     "april"=> $office4,     "may"=> $office5,     "june"=> $office6,     "july"=>$office7,     "august"=> $office8,     "september"=> $office9,      "october"=>$office10,     "november"=>$office11,     "december"=> $office12,      "total"=>$office1+$office2+$office3+$office4+$office5+$office6+$office7+$office8+$office9+$office10+$office12],
            ["id" => '/-', "name" => "total in a month__  [$MONTH]", "january" => $total1,     "february" =>$total2 ,      "march"=> $total3,      "april"=> $total4,      "may"=> $total5,      "june"=> $total6,      "july"=>$total7,      "august"=> $total8,      "september"=> $total9,       "october"=>$total10,      "november"=>$total11,      "december"=> $total12,       "total"=>$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9+$total10+$total11+$total12]
        ];

        // টেবিল শুরু
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Name / Year</th>
                <th>january</th>
                <th>february</th>
                <th>march</th>
                <th>april</th>
                <th>may</th>
                <th>june</th>*
                <th>july</th>
                <th>august</th>
                <th>september</th>
                <th>october</th>
                <th>november</th>
                <th>december</th>
                <th>in total</th>
                </tr>";

            echo "</tr>";

        // টেবিলের রো জেনারেট করা
        foreach ($users as $user)  {
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['name']}</td>";
            echo "<td>{$user['january']}</td>";
            echo "<td>{$user['february']}</td>";
            echo "<td>{$user['march']}</td>";
            echo "<td>{$user['april']}</td>";
            echo "<td>{$user['may']}</td>";
            echo "<td>{$user['june']}</td>";
            echo "<td>{$user['july']}</td>";
            echo "<td>{$user['august']}</td>";
            echo "<td>{$user['september']}</td>";
            echo "<td>{$user['october']}</td>";
            echo "<td>{$user['november']}</td>";
            echo "<td>{$user['december']}</td>";
            echo "<td>{$user['total']}</td>";
            
            echo "</tr>";


        }
        // টেবিল শেষ
        echo "</table>";
    ?>
</body>
</html>