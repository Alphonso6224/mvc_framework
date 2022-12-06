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
      * abgit23
      * Renvoie toutes les routes
      *@ return 
      */
      public function getRoutes() {
        return $this->routes;
      }
      
      public function match($url) {
        // foreach($this-routes as $route => $param) {
        //     if ($url === $route) {
        //         $this->params = $param;
        //         return true ;
        //     }
        //     return false;
        // }

        $regex = "/^(?<controller>[a-z-]+)\/(?<action>[a-z-]+)$/";

        if(preg_match($regex, $url, $matches)) {
          $param = [];
          foreach($matches as $key => $val) {
            if (is_string($key)) {
              $param[$key] = $val;
            }
          }
          $this->params = $param;
          return true;
        }
        return false;
      }
      /**
       * Renvoie tous les paramètre
       *@ return 
       */
       public function getParams() {
         return $this->param;
       }


      //  $string = "{controller}/{action}"
       public function addPlus($string) {
          return '$result= preg_replace("/(\w+)\/(\w+)/", (?<\\1>[a-z-]+)\/(?<\\2>[a-z-]+), $string)';
       }
       echo addPlus("{controller}/{action}");
 }
?>