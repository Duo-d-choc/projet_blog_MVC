<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Users;
use App\Fram\Utils\Flash;
use App\Manager\CommentManager;
use App\Manager\PostManager;
use App\Fram\Factories\PDOFactory;


class PostController extends BaseController
{
    public function executeIndex (int $number = 5){
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

    public function executeDeleteArticle (int $number = 5){
        $manager = new postManager(PDOFactory::getMysqlConnection());
        $delete_article = $manager->deletePostById($this->params['id']);

        if ($delete_article){
            return $this->executeIndex();
        } else {
            return "<script>alert('Suppression article impossible')</script>";
        }

    }

    public function executeCreateComment(){
        $manager = new commentManager(PDOFactory::getMysqlConnection());
        $comment = new Comment([
            'id_user' => "1",
            'date' => 'now',
            'id_article' => $_POST['post_article'],
            'content' => $_POST['content']
        ]);



        $create_comment = $manager->createComment($comment);
    }

    public function executeDeleteComment (){
        $manager = new commentManager(PDOFactory::getMysqlConnection());
        $postId = $manager->getCommentById($this->params['id'])->getId_article();
        $delete_comment = $manager->deleteCommentById($this->params['id']);

        if ($delete_comment){
            return header('Location: /article/' . $postId);
        } else {
            return "<script>alert('Suppression commentaire impossible')</script>";
        }

    }
}