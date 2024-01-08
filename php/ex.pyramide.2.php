<?php
// realiser une pyramide avec des etoile//

FUNCTION DisplayPyramid ( int $roof , int $floor ) {
    FOR ( $i=$roof;$i<=$floor;$i++) {
        for ($j=1;$j<=$i;$j++) {
            echo "*";
        }
        echo "\n";
    }
}
DisplayPyramid ( 5,10);
DisplayPyramid (10,20);
