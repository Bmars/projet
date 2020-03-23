<?php

$resultat = compterPair([ 1, 2, 17, 25]);

$tabNombre = [ 18, 4, 7, 0, 24, 22, 47, 199 ];
// CERVEAU HUMAIN => RESULTAT = 5

// MON CERVEAU PREND LES NOMBRES DU PREMIER AU DERNIER
// ET POUR CHAQUE NOMBRE, MON CERVEAU SE DEMANDE SI CE NOMBRE EST PAIR OU IMPAIR
// SI LE NOMBRE EST PAIR ALORS ON AUGMENTE LE COMPTEUR DE 1

// ENSUITE, IL FAUT TRADUIRE CES ETAPES EN CODE
function compterPair($tabNombre)
{
    // VALEUR INITIALE AU COMPTEUR
    $compteur = 0;
    // IL FAUT CODER LE FONCTIONNEMENT DU CERVEAU
    // MON CERVEAU PREND LES NOMBRES DU PREMIER AU DERNIER
    // EN PROGRAMMATION => BOUCLE
    foreach($tabNombre as $nombre)
    {
        // ET POUR CHAQUE NOMBRE, 
        // MON CERVEAU SE DEMANDE SI CE NOMBRE EST PAIR OU IMPAIR
        // EN PROGRAMMATION => CONDITION if...else...
        if (($nombre % 2) == 0) 
        {
            // PAIR
            // SI LE NOMBRE EST PAIR ALORS ON AUGMENTE LE COMPTEUR DE 1
            // EN PROGRAMMATION => VARIABLE POUR MEMORISER UNE VALEUR NOMBRE
            // $compteur++;
            $compteur = $compteur + 1;
        }
        else
        {
            // IMPAIR
            // OPTIONNEL
        }
    }

    return $compteur;
}