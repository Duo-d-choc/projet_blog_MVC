<?php

namespace App\Controller;

use App\Entity\Users;
use App\Fram\Utils\Flash;
use App\Manager\PostManager;
use App\Fram\Factories\PDOFactory;


class SecurityController extends BaseController
{
    public function executeLogin (){

        $manager = new PostManager(PDOFactory::getMysqlConnection());

        //ligne a mettre pour connexion
        $compte = $manager->getAllPosts($number);


        if ($compte){
            return $_SESSION['connect'] = true;
        }
        return false;




        $this->render('login.php', [], 'Connexion');


    }

    public function executeCreateAccount (){

        $manager = new PostManager(PDOFactory::getMysqlConnection());

        //ligne a mettre pour création de compte
        $articles = $manager->getAllPosts($number);


        $this->render('create_account.php', [], 'Créer un compte');
    }

}