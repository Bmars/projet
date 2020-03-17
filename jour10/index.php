<?php

    require_once 'php/model/glossaire.php';

        //print_r($glossaire);

    function afficheTerm($array)
 {
    $length = count($array);
    $index = mt_rand(0, $length -1);
       // var_dump($index);
    //print_r($array[$index]);

    //echo '<h1>';
    //print_r($array[$index]["title"]);
    //echo'</h1>';
    //echo'<br>';
    //print_r($array[$index]["description"]);

    $title = $array[$index]['title'];
    $description = $array[$index]['description'];

    $html =
<<<CODEHTML
    <div>
    
        <h1>le terme est : {$title}</h1>
        <p>la definition est : {$description}</p>
        
    
    </div>



CODEHTML;


    echo $html;

    

}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Glossaire des termes OPQUAST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
        
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php afficheTerm($glossaire);?>


</body>
</html>