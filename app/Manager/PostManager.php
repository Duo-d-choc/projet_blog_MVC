<?php

namespace App\Manager;

use App\Entity\Post;

class PostManager extends BaseManager
{

    /**
     * @param int|null $number
     * @return array
     */
    //public function getAllPosts($pdo): array
    public function getAllPosts(int $number = null): array
    {
        if($number){
            $query = this->db->prepare('SELECT * FROM Article ORDER BY id DESC LIMIT :limit');
            $query->bindValue(':limit', $number, \PDO::PARAM_INT);
            $query->execute();
        } else {
            $query = $this->db->query('SELECT * FROM Article ORDER BY id DESC');
        }
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post');

        return $query->fetchAll();
        //$requete = ('SELECT * FROM Article;');
        //$reponse = $this->pdo->query($requete);

        //return $reponse;
    }

    public function getPostById(int $id): Post
    {
        // TODO - Posts by Id
    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function createPost(Post $post)
    {
        // TODO - create post
        return true;
    }

    /**
     * @param Post $post
     * @return Post|bool
     */
    public function updatePost(Post $post)
    {
        // TODO - getPostById($post->getId())
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deletePostById(int $id): bool
    {
        // TODO - Delete post
    }
}