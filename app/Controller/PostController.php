<?php

namespace App\Controller;

use App\Entity\Users;
use App\Fram\Utils\Flash;
use App\Manager\CommentManager;
use App\Manager\PostManager;
use App\Fram\Factories\PDOFactory;


class PostController extends BaseController
{
    public function executeIndex (int $number = 2){
        $manager = new PostManager(PDOFactory::getMysqlConnection());
        $articles = $manager->getAllPosts($number);

        $this->render('home.php', ['articles' => $articles], 'Homepage');
    }

    public function executeArticle (){
        $manager = new PostManager(PDOFactory::getMysqlConnection());
        $post_article = $manager->getPostById($this->params['id']);

        if(!$post_article){
            header('Location: /');
            exit();
        }

        $manager2 = new CommentManager(PDOFactory::getMysqlConnection());
        $comments = $manager2->getAllComments($this->params['id']);

        return $this->render('article.php', ['post_article' => $post_article, 'comments' => $comments], 'Article');
    }

    public function executeCreateArticle (){
        $manager = new PostManager(PDOFactory::getMysqlConnection());

        return $this->render('create_article.php', [], 'Créer article');
    }
}