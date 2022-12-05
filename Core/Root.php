<?php

/**
 * class root
 */

 class Root {
    public function handleRequest(): void {
        $route = $_GET['page'] ?? 'homepage';

        switch($route) {
            case 'homepage' :
                $controller = new HomepageController();
                $controller->dispayHomepage();
                break;

            case 'contact' :
                $controller = new ContactController();
                $controller->displayContactForm();
                break;

            default : 
                $controller = new HomepageController();
                $controller->displayHomepage;
                break;
        }
    }
 }

?>