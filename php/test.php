<?php
$jeuFilleCat1= [
    [
        'index'=>'0',
    'article'=>'barbie',
    'description'=>'barbie avec 2 robe et ses accessoires',
    'prix'=>'15.99€',
    'enabled'=>true,
        ],
    [
        'index'=>'1',
    'article'=>'girafe musicale',
    'description'=>'girafe a empiler avec son et lumiere',
    'prix'=>' 12.50 €',
    'enabled'=>false,
    ],
    [
        'index'=>'2',
        'article'=>'doudou stich',
        'description'=>'doudou reversible ',
        'prix'=>'19.99 €',
        'enabled'=>true,
        ],
    [
        'index'=>'3',
        'article'=>'veilleuse',
        'description'=>'veilleuse avec auto projecteur',
        'prix'=>'24.95 €',
        'enabled'=>false,
        ],
    ['index'=>'4',
        'article'=>'piano',
        'description'=>'piano interactif',
        'prix'=>'34.99€',
        'enabled'=>true,
        ],

    ];
foreach ($jeuFilleCat1 as $value)
    {
        echo $jeuFilleCat1 ='article'.$jeuFilleCat1 ='prix' .PHP_EOL;
}
?>