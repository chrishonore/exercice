<?php
echo " entree le numero du jour souhaite  " ;
$day = fgets(STDIN ) ;

echo  " entrer un nombre correspondant au mois souhaite " ;
$month = fgets(STDIN ) ;

switch ( $month) {
    case 1 :$month= " janvier " ;
    break;
    case 2 :$month=  " fevrier " ;
        break;
    case 3 :$month=  " mars " ;
        break;
    case 4 :$month=  " avril " ;
        break;
    case 5 :$month=  " mai " ;
        break;
    case 6 :$month=  " juin " ;
        break;
    case 7 :$month=  " juillet " ;
        break;
    case 8 :$month=  " aout " ;
        break;
    case 9 :$month=  " septembre " ;
        break;
    case 10 :$month=  " octobre " ;
        break;
    case 11 :$month=  " novembre " ;
        break;
    case 12 :$month=  " decembre " ;
        break;
}
if ( $day ) {
    $day=" >=01 || <=31 " && $month="janvier "."mars"."mai"."juillet"."aout"."octobre"."decembre".true;
    echo "le ".$day."du mois de ".$month."est une date qui existe";
    }
   elseif ($day){
    $day=" >=01 || <=30 " && $month="avril"."juin"."septembre"."novembre".true ;
       echo "le ".$day."du mois de ".$month."est une date qui existe";
   }
elseif ( $day){
    $day= " >=01 || <=28".doc(year %4==0 && year%100==0 && year%400==0).$month="fevrier";
    echo "le ".$day."du mois de ".$month."est une date qui existe";
   }
    else {
    echo "cette date n existe pas ";
    }