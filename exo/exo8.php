<?php

    // EXO 8

    // ETAPE1: DECLARATION
    // ATTENTION: LA FONCTION NE PREND QU'UN SEUL PARAMETRE
    // QUI EST UN TABLEAU AVEC PLUSIEURS VALEURS
    function concatenerTexte ($tablettre)
    {
        // ICI IL FAUT AJOUTER LE CODE MANQUANT...
        
        // IL FAUT PARCOURIR LE TABLEAU
        // ET POUR CHAQUE VALEUR DU TABLEAU
        // IL FAUT LE CONCATENER
        // EN SEPARANT LES VALEURS PAR UNE VIRGULE

        // ON DONNE UNE VALEUR INITIALE
        $resultat = "";

        // IL FAUT PARCOURIR LE TABLEAU
        // => UNE BOUCLE
        foreach($tablettre as $indice => $lettre)
        {
            // ET POUR CHAQUE VALEUR DU TABLEAU
            // IL FAUT LE CONCATENER
            // EN SEPARANT LES VALEURS PAR UNE VIRGULE
            // SOIT ON RAJOUTE LA VIRGULE
            // SOIT ON NE RAJOUTE PAS LA VIRGULE
            // => CONDITION
            if ($indice > 0)
            {
                // JE RAJOUTE LA VIRGULE
                $resultat = "$resultat," . "$lettre";
            }
            else
            {
                // ON EST SUR LE PREMIER ($indice == 0)
                $resultat = "$resultat" . "$lettre";
            }
        }

        return $resultat;
    }    

    // APPEL2: APPEL DE LA FONCTION
    $texteConcatene = concatenerTexte([ 'a', 'b', 'c', 'd' ]);
    // TABLEAU ORDONNE
    // INDICE 0 => VALEUR 'a'
    // INDICE 1 => VALEUR 'b'

    echo "<h1>LE RESULTAT EST $texteConcatene</h1>";

    function concatenerTexteBis ($tablettre)
    {
        // VALEUR INITIALE: LE PREMIER ELEMENT DU TABLEAU
        $resultat = $tablettre[0];
        // QUAND ON PARCOURT LE TABLEAU
        // ALORS IL FAUT COMMENCER AU 2E ELEMENT
        // (indice = 1)
        for($i=1; $i <count($tablettre); $i++)
        {
            $lettre = $tablettre[$i];
            // ON CONCATENE AVEC LA VIRGULE
            $resultat  = "$resultat,$lettre";
        }
        return $resultat;
    }

    $texteConcatene = concatenerTexteBis([ 'a', 'b', 'c', 'd' ]);
    // TABLEAU ORDONNE
    // INDICE 0 => VALEUR 'a'
    // INDICE 1 => VALEUR 'b'

    echo "<h1>LE RESULTAT BIS EST $texteConcatene</h1>";

