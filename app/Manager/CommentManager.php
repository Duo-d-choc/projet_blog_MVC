<?php

namespace App\Manager;

use App\Entity\Comment;
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

        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Comment');

        if ($query) {
            //var_dump($query->fetchAll());
            //die();
            return $query->fetchAll();
        }
        return [$query];
    }
}
