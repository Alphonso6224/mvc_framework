<?php
## fichier index.php contenu dans le dossier public 

// on appelle le fichier router

    // require '../Core/Root.php';
    // $root = new root();
    // echo '<pre>';    
    // var_dump($root->handleRequest());
    // echo '</pre>';    

    require '../Core/Router.php';
    $router = new Router();

    echo "Hello i'm Donald ! <br>";

    // Query string
    echo "Chaine de requete ==> '" .$_SERVER['QUERY_STRING']. "'";

    // Ajout de quelques routes 
    $router->add("", ["controller" => "Home", "action" => "index"]);
    $router->add("posts", ["controller" => "Post", "action" => "show"]);
    // // $router->add("posts", ["controller" => "Post", "action" => "show"]);

    echo '<pre>';    
    var_dump($router->getRoutes());
    echo '</pre>';
?>