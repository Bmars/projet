<?php

    function comparer ($nombre1,$nombre2)
{

    if ($nombre1 < $nombre2)
    $resultat=$nombre1;

    else $resultat=$nombre2;

    return $resultat;
}    
    $somme=comparer(10,20) ;
    echo $somme ;



    

