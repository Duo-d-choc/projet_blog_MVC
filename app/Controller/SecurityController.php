<?php

namespace App\Controller;

use App\Entity\Users;
use App\Fram\Utils\Flash;
use App\Manager\PostManager;
use App\Fram\Factories\PDOFactory;


class SecurityController extends BaseController
{
    public function executeLogin (){
        $this->render('login.php', [], 'Connexion');
    }

    public function executeCreateAccount (){
        $this->render('create_account.php', [], 'Créer un compte');
    }

}