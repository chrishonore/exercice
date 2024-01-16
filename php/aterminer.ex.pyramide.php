<?php
// realiser une pyramide avec des etoile//

FUNCTION DisplayPyramid( ) {
    FOR ( $i=1;$i<=5;$i++) {
for ($j=1;$j<=$i;$j++) {
    echo "*";
}
echo "\n";
    }
}
DisplayPyramid ( );
DisplayPyramid ( );