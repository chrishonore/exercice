<?php
$Q1="est-ce que ces 3 dernieres semaines tu as programme ?";
$Q2="est-ce que tu es au moins aussi bon qu'il y a 3 semaines en programmation  ?";
$Q3=" est-ce que tu as profite de ce temps pour aller plus loin , apprendre de nouvelle chose ?";
$Q4=" est-ce que tu as demande de l'aide a quelqu'un pour t'aider ?  est-ce que tu sait pourquoi ?  ";
$M_F=" Je t'invite à évaluer ce que tu penses être ton objectif en programmation, et regarder ce que tu fais pour y arriver. je n'émet aucun jugement, et les réponses ne te concernent que toi, peut être que ce que tu fais est très bien, peut-être que tu as besoin d'aide, peut-être que tu ne donnes pas assez, seul toi a les réponses à ces questions, je t'invite simplement à mettre en parallèle ce que tu fais et as fait pour la formation et tes objectifs. Tu peux arriver à tout, tu peux tout faire, et quel que soit ton objectif en programmation tu peux l'atteindre, mais pour y arriver, il faut que tes actes soient en accord avec tes objectifs. Peut-être est-ce le cas, peut-être ça ne l'est pas, je te laisse seul juge de la situation. La formation n'est pas finie, et je t'invite à te donner à fond pour les 3 derniers mois que nous avons ensemble, car tu vas manger du PHP, et ça va aller très vite. Tout est encore possible, et tu es l'acteur principal de ce qui va arriver. Dans 4 mois, tu auras fini la formation, et tu auras peut-être une proposition d'emploi. Peut-être pas, je ne peux rien te promettre, mais c'est une possibilité. Je ne serai alors qu'un vilain souvenir, une des personnes qui t'as permis de faire un pas de plus vers un emploi qui te plaît ou les deux. Travaillons ensemble pour réussir tes objectifs.

 ";
echo $Q1."(oui/non):";
$r_q1=strtolower(trim(fgets(STDIN)));
echo $Q2."(oui/non):";
$r_q2=strtolower(trim(fgets(STDIN)));
if ($r_q1=="oui" && $r_q2=="oui"){
  echo $Q3 . PHP_EOL;
}
elseif ($r_q1=="oui" && $r_q2=="non"){
    echo $Q4 . PHP_EOL;
}
elseif ($r_q1=="non" && $r_q2=="oui"){
    echo $Q3 . PHP_EOL;
}
echo $M_F .PHP_EOL;
