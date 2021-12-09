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
        $articles = $manager->getAllPosts($number);
        //echo '<pre>';
        //var_dump($articles); die;

        $this->render('home.php', ['articles' => $articles], 'Homepage');
    }

    public function executeArticle (){
        $manager = new PostManager(PDOFactory::getMysqlConnection());
        $post_article = $manager->getPostById($this->params['id']);

        if(!$post_article){
            header('Location: /');
            exit();
        }

        return $this->render('article.php', ['post_article' => $post_article], 'Article');
    }
}