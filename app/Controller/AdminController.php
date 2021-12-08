<?php

namespace App\Controller;

use App\Manager\PostManager;
use App\Fram\Factories\PDOFactory;

class AdminController extends BaseController
{
    public function executeAdmin (){
        return $this->render('admin.php', [], 'Admin');
    }

    public function executeAccount (){
        return $this->render('account.php', [],'Mon compte');
    }
}