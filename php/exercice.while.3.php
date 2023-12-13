<?php
$chrono=100 ;
echo " 100 " ."\n";
while ( $chrono <= 999 ) {
    sleep( 1) ;
    $chrono=( $chrono + 25 ) ;
    echo $chrono ." \n " ;
}
echo " enfin 1000 " ;
