<?php
    function renvoyerMin ($tabNombre)
    {
        // QUEL SERAIT LE CODE POUR OBTENIR CE RESULTAT ?
        // SI JE VEUX PRENDRE CHAQUE ELEMENT D'UN TABLEAU
        // => BOUCLE
        // IL FAUT DONNER UNE VALEUR A $plusPetit
        $plusPetit = $tabNombre[0]; // ON PREND LA PREMIERE VALEUR
        foreach($tabNombre as $nombre)
        {
            // SI JE COMPARE DES VALEURS => CONDITION
            if ($nombre < $plusPetit)
            {
                // $nombre EST PLUS PLUS PETIT QUE $plusPetit
                // DONC $nombre DEVIENT LE PLUS PETIT
                $plusPetit = $nombre;
            }
        } 

        return $plusPetit;
        
    }

    $tab = ([4,6,9]);

    echo renvoyerMin($tab);
