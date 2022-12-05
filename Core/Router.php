<?php

/**
 * Router
 */

 class Router {
    /**
     * L'ensemble des routes de l'application (la table des routes)
     * 
     * var array
     *  */    
    protected $routes = [];
    
    /**
     * Permet d'ajouter une routes à la table des routes
     * 
     * @param  string $url : l'url à ajouter
     * @param array $param: l'ensemble des paramètre de la route
     * @return void
     */
    public function add($url, $params = []){
        $this->routes[$url] = $params;
    }
    
     /**
      * Renvoie toutes les routes
      *@ return 
      */
      public function getRoutes() {
        return $this->routes;
      }
 }

?>