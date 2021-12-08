<?php

namespace App\Controller;

class ErrorController extends BaseController
{
    public function executeError404()
    {
        return $this->render(
            '404.php',
            [],
            'Erreur 404'
        );

    }
}