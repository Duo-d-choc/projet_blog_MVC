<?php

namespace App\Controller;

use App\Manager\UsersManager;
use App\Fram\Factories\PDOFactory;

class UsersController extends BaseController
{
    public function executeAdmin (int $number = 2){
        $manager = new UsersManager(PDOFactory::getMysqlConnection());
        $users = $manager->getAllUsers($number);
        //echo '<pre>';
        //var_dump($users); die;

        return $this->render('admin.php', ['users' => $users], 'Admin');
    }

    public function executeAccount (){
        return $this->render('account.php', [],'Mon compte');
    }
}