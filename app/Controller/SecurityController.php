<?php

namespace App\Controller;

use App\Entity\Users;
use App\Fram\Utils\Flash;
use App\Entity\Security;
use App\Manager\SecurityManager;
use App\Fram\Factories\PDOFactory;



class SecurityController extends BaseController
{
    public function executeLogin (){


        $_SESSION['token'] = SecurityManager::connexion(PDOFactory::getMysqlConnection());

        if ($_SESSION['token']){

            $this->render('login.php', [], 'Connexion');
        }

    }

    public function executeCreateAccount (){
        $pdo = PDOFactory::getMysqlConnection();

        $recup = new SecurityManager();
        $recup->createAccount($_POST, $pdo);
        //var_dump($_POST);


        $this->render('create_account.php', [], 'Créer un compte');
    }

}