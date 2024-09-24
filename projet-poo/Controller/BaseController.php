<?php

namespace Controller; // Autoload gère ça

abstract class BaseController
{

    public function render($fichier, array $parametres = [])
    {
        extract($parametres);

        include 'public/header.html.php';
        include "views/$fichier";
        include 'public/footer.html.php';
    }

    public function redirectToRoute(array $linkInfo){
        $controller = $linkInfo[0];
        $method = $linkInfo[1] ?? null;
        $id = $linkInfo[2] ?? null;
        redirection(addLink($controller,$method,$id));
    }
}
