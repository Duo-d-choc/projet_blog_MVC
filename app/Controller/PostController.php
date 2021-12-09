<?php

namespace App\Controller;

use App\Entity\Users;
use App\Fram\Utils\Flash;
use App\Manager\PostManager;
use App\Fram\Factories\PDOFactory;


class PostController extends BaseController
{
    public function executeIndex (int $number = 2){
        $manager = new PostManager(PDOFactory::getMysqlConnection());
        $index = $manager->getAllPosts();

        return $this->render('home.php', $index, 'Homepage');
    }

    public function executeArticle (){
        $manager = new PostManager(PDOFactory::getMysqlConnection());
        //$article = $manager->getPostById($this->params['id']);
        $article = $manager->getPostById(1);

        if(!article){
            header('Location: /');
            exit();
        }

        return $this->render('article.php', ['article' => $article], $article->getTitle());
    }
}