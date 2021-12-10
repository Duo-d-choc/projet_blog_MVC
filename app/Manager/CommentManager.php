<?php

namespace App\Manager;

use App\Entity\Comment;
use App\Entity\Post;
use App\Manager\BaseManager;

class CommentManager extends BaseManager
{

    /**
     * @return array
     */

    public function getAllComments($id): array

    {
        $sql = 'SELECT c.* 
                FROM Comment c
                JOIN Article a
                    ON c.id_article = a.id
                    WHERE a.id = :id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();

        $query->setFetchMode(\PDO::FETCH_ASSOC);
        $result = [];
        foreach ($query->fetchAll() as $data) {
            $result[] = new Comment($data);
        }
        return $result;

    }
}
