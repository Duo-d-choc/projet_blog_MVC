<?php

namespace App\Controller;

use App\Fram\Factories\PDOFactory;

class ErrorController extends BaseController
{
    public function executeError404()
    {
        $this->render(
            '404.php',
            [],
            'Wrong road'
        );
    }
}