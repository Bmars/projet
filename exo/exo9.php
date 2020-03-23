<?php

// CREER UNE FONCTION POUR CALCULER LE PRIX TOTAL
// LES 2 TABLEAUX ONT LE MEME NOMBRE D'ELEMENTS
function calculerPrixTotal ($tabQuantite, $tabPrixUnitaire)
{
    // ICI IL FAUT AJOUTER LE CODE MANQUANT
    // PRIXTOTAL = 1x10 + 2x20 + 3x30 + 4x40
    // J'AI PARCOURU LES 2 TABLEAUX
    // POUR PRENDRE CHAQUE ELEMENT
    // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
    // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
    
    // VALEUR INITIALE
    $total = 0;

    // J'AI PARCOURU LES 2 TABLEAUX
    // BOUCLE => for
    for ($indice=0; $indice < count($tabPrixUnitaire); $indice++)
    {
        // POUR PRENDRE CHAQUE ELEMENT
        // ET JE MULTIPLIE LES VALEURS => SOUS-TOTAL
        $prixUnitaire = $tabPrixUnitaire[$indice];
        $quantite     = $tabQuantite[$indice];
        // LA BOUCLE PERMET DE REUNIR LES 2 INFOS DES 2 TABLEAUX
        // POUR EFFECTUER LA MULTIPLICATION
        $sousTotal    = $prixUnitaire * $quantite;

        // ET JE RAJOUTE LE SOUS-TOTAL AU TOTAL
        $total = $total + $sousTotal;    
    }

    return $total;
}


$tabQuantite     = [ 1,  2,  3,  4 ];
$tabPrixUnitaire = [ 10, 20, 30, 40 ];
$prixTotal       = calculerPrixTotal($tabQuantite, $tabPrixUnitaire);    
// $prixTotal => 300 EUROS 

echo "<h1>PRIX TOTAL PANIER: $prixTotal euros</h1>";