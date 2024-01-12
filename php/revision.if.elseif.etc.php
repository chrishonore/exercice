<?php
// repondre correctement a des question
echo "      __________________________________________________
      | Bienvenu on va faire un petit test de culture .|
      |________________________________________________| " ;
echo " premiere question \n comment  s appele le pere de pinocchio ? \n";
echo " 
  __________________________
  | tapez 1 | = | geppetto |
  | tapez 2 | = |pepetto   |
  | tapez 3 | = |pepito    |
  |_________|___|__________|";
$quest1 =(fgets(STDIN));
$quest1="1";
while ( $quest1 >=1 && $quest1 <=3){
    if ($quest1 == 1 )  {
    echo " bonne reponse ";
}
if ($quest1 == 2 ){
    echo " mauvaise reponse ";
}
elseif ($quest1 == 3 ) {
    echo " pas bien du tout lol " ;
}
else {
    echo "bye bye";
}
}
?>