<?php
// TODO : récupérer le paramètre page dans l'url en GET
if (!empty($_REQUEST['page'])) {
    // passer la chaîne de caractères en minuscules et construire le nom du template
    // Doc méthode strtolower() : https://www.php.net/manual/fr/function.strtolower.php
    $page = strtolower($_REQUEST['page']).'.php';

    // TODO : récupérer la liste des templates
    // Doc méthode scandir() : https://www.php.net/manual/fr/function.scandir.php
    $templates = scandir('templates', 1);
    // DEBUG
    // print_r($templates);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Router PHP</title>
    <!-- TODO: inclure lien vers CDN Bootstrap -->
</head>
<body>
<!-- TODO: contruire le menu qui va permettre de naviguer vers les autres pages
    les liens du menu devront pointer vers index.php et passer en paramètre GET le nom de la pages
    ex ?page=contact
    <a href="index.php?page=contact">Contact</a> -->

    <!-- TODO: inclure code de la navbar (bootswatch.com) -->
    <?php
        // TODO: vérifier si on a bien la clé "page" dans l'url
        if (isset($_REQUEST['page'])) {
            // TODO: vérifier si le fichier correspondant existe dans le dossier templates
            // Doc méthode in_array() : https://www.php.net/manual/fr/function.in-array.php
            if (in_array($page, $templates)) {
                // afficher le template correspondant
                require_once "templates/{$page}";
            } else {
                // afficher le template 404.php
                require_once 'templates/404.php';
            }
        }
     ?>
</body>
</html>