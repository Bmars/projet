<?php

function comparerbis ($nombre1,$nombre2,$nombre3)
{
    if (($nombre1< $nombre2) && ($nombre1< $nombre3)) { 
        $resultat= $nombre1; 
    }
    elseif(($nombre2< $nombre1) && ($nombre2< $nombre3)){ 
        $resultat= $nombre2; 
    }
    else{ 
        $resultat= $nombre3; 
    }
    return $resultat;
}
$resul=comparerbis(5,8,9);
echo $resul;