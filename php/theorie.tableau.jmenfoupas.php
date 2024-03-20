<?php
DECLARE(strict_types=1);
$count=0;
$tireurs=["Jackye","Michelle","Ducobu" ];
$scores=    ['17','15','18'];
$ScreMin=0;
$scoreMax=100;
Tir_Compet($tireurs,$scores);
echo "\n nouvelle fonction  \n " ;
$tireurs[]="Patrick";
$scores[]=44;
Tir_Compet($tireurs,$scores);
 function Tir_Compet (array $tireurs,array $scores): void
{
    for ($i=0;$i<count($tireurs);$i++){
        echo " \n Le tireur " .$tireurs[$i]. " as realiser un score de  : " .$scores[$i]." sur 100 \n ";
    }
}
function croissant ($score){
    $taille=count($score);
    for ($i=0;$i<$taille-1;$i++){
        for ($j=$i+1;$j<$taille;$j++){
            if ($score[$i] > $score[$j]){
                $temp=$score[$i];
                $score[$i]=$score[$j];
                $score[$j]=$temp;
            }
        }
    }
    return $score  ;
}
 $scores_tries=croissant($scores);
 print_r($scores_tries);

function Tir_Sco ($tireurs, $score){
            for ($i=0;$i<count($tireurs);$i++){
            echo  $tireurs[$i] .$score[$i]."sur 100." . PHP_EOL ;
    }
  }
$scores_tries=Tir_Sco($tireurs,$scores);
print_r($scores_tries);

function ascending_order (array $arrayToSort):array{
       for ($i=0;$i<count($arrayToSort)-1;$i++){
           for ($j=$i+1;$j<count($arrayToSort);$j++){
         if ($arrayToSort[$j]<$arrayToSort[$i]){
          $temp=$arrayToSort[$j];
          $arrayToSort[$j]=$arrayToSort[$i];
          $arrayToSort[$i]=$temp;
         }
           }
       }
       return $arrayToSort;
}
$scores_tries=ascending_order($scores);
print_r($scores_tries);
// tableau a deux dimension
$count=0;
$tireurs_score=[
    ['joel',54],
    ['mimi',25],
    ['momo',80],
    ['lulu',5]
];
$ScreMin=0;
$scoreMax=100;

function afficher_tab_2d($tireurs_score){
    echo "tableau a deux dimension:".PHP_EOL;
    $nb_lignes=count($tireurs_score);
    for ($i=0;$i<$nb_lignes;$i++){
        $nb_colonnes=count($tireurs_score[$i]);
        for ($j=0;$j<$nb_colonnes;$j++){
            echo $tireurs_score[$i][$j]." ";
        }
        echo PHP_EOL;
    }
}
afficher_tab_2d($tireurs_score);
// tableau 2d ordtre croissant
function ascending_order_tir_sco (array $arrayToSort):array{
    for ($i=0;$i<count($arrayToSort)-1;$i++){
        for ($j=$i+1;$j<count($arrayToSort);$j++){
            if ($arrayToSort[$j][1] <$arrayToSort[$i][1]){
                $temp=$arrayToSort[$j];
                $arrayToSort[$j]=$arrayToSort[$i];
                $arrayToSort[$i]=$temp;
            }
        }
    }
    return $arrayToSort;
}
$scores_tries=ascending_order($tireurs_score);
print_r($scores_tries);

//Trier et afficher
$scores_tries = ascending_order_tir_sco($tireurs_score);
afficher_tab_2d($scores_tries);