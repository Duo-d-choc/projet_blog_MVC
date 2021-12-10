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

        $connexion = new SecurityManager();
        $pdo = PDOFactory::getMysqlConnection();
        $connexion->connexion($_POST, $pdo);
        $this->render('login.php', [], 'Connexion');

    }

    public function executeCreateAccount (){
        $pdo = PDOFactory::getMysqlConnection();

        $recup = new SecurityManager();
        $recup->createAccount($_POST, $pdo);



        $this->render('create_account.php', [], 'Créer un compte');
    }

}