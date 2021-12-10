<?php

namespace App\Manager;

use App\Entity\Post;
use App\Fram\Factories\PDOFactory;

class PostManager extends BaseManager
{

    /**
     * @param int|null $number
     * @return array
     */

    public function getAllPosts(int $number): array

    {
        $sql = 'SELECT * FROM Article ';

        if($number){
            $query = $this->pdo->prepare($sql .'LIMIT :limit');
            $query->bindValue(':limit', $number, \PDO::PARAM_INT);
            $query->execute();
        } else {
            $query = $this->pdo->prepare($sql);
            $query->execute();
        }
        $query->setFetchMode(\PDO::FETCH_ASSOC);
        //var_dump($query->fetchAll());
        //die();
        $result = [];
        foreach ($query->fetchAll() as $data) {
            $result[] = new Post($data);
        }
        return $result;
    }

    public function getPostById(int $id): Post
    {
        $sql = 'SELECT * FROM Article WHERE id=:id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_ASSOC);

        $res = $query->fetch();
        return new Post($res);
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
        // TODO - update post
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deletePostById(int $id): bool
    {
        $sql = 'DELETE FROM `Article`
                WHERE `id`=:id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();

        return true;
    }

}
