<?php
## fichier index.php contenu dans le dossier public 

// on appelle le fichier router

    // require '../Core/Root.php';
    // $root = new root();
    // echo '<pre>';    
    // var_dump($root->handleRequest());
    // echo '</pre>';    

    // require '../Core/Router.php';
    // $router = new Router();

    // echo "Hello i'm Donald ! <br>";

    // Query string
    // echo "Chaine de requete ==> '" .$_SERVER['QUERY_STRING']. "'";

    // Ajout de quelques routes 
    // $router->add("", ["controller" => "Home", "action" => "index"]);
    // $router->add("posts", ["controller" => "Post", "action" => "show"]);
    // // $router->add("posts", ["controller" => "Post", "action" => "show"]);

    // echo '<pre>';    
    // var_dump($router->getRoutes());
    // echo '</pre>';

    // $router->match($url);
    //     if (!empty($router->getParams())) {
    //         echo "<br>Parametre de la route actuelle";
    //         var_dump($router->getParams());
    //     } else {
    //         echo "<h1>Désolé! La page n'a pas été trouvée</h1>";
    //     }

    preg_match_all("/[a-z\s]+/i", "I'm donald ahossi 0 5 986 754 ", $matches);
    echo '<pre>';
    var_dump($matches);
    echo '</pre>';
    
    $string = "{controller}/{action}";
    $result= preg_replace("/(\w+)\/(\w+)/", "(<\\1>[a-z-]+)\/(<\\2>[a-z-]+)", $string);
    echo '<pre>';
    echo $result;
    echo '</pre>';
    ?>