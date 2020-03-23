
<?php

// ETAPE1
// CE CODE SERA DANS UN FICHIER A PART QUI SERA CHARGE AU DEBUT
function creerDeleteSQL ($nomTable, $id)
{
    // IL FAUT CONCATENER LES PARAMETRES POUR OBTENIR LE CODE SQL
    $resultat = 
<<<CODESQL

DELETE FROM $nomTable
WHERE id = $id

CODESQL;

    // LA FONCTION DOIT RENVOYER UN TEXTE QUI EST DU CODE SQL
    return $resultat;
}


// ETAPE2:
$codeSQL = creerDeleteSQL("contact", 5);
echo "<h1>LE CODE SQL EST: $codeSQL</h1>";