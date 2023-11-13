<?php
echo "entrer un nombre entre 0 et 100 . ";
$number=fgets(STDIN);

if ($number>=90){
    echo "tres bien";
}
elseif ($number >= 80 && $number < 90 ) {
    echo "bien ";
}
elseif ($number >= 70 && $number < 80 ) {

    echo " satisfaisant ";
}
else {
  echo "a ameliorer";
}
?>