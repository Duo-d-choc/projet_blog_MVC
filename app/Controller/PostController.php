<?php

namespace App\Controller;

use App\Entity\Users;
use App\Fram\Factories\PDOFactory;
use App\Fram\Utils\Flash;
use App\Manager\PostManager;

class PostController extends BaseController
{
    public function executeIndex (int $number = 2){
        $manager = new PostManager();
        $index = $manager->getAllPosts();

        return $this->render('Frontend/home', $index, 'Homepage');
    }
}