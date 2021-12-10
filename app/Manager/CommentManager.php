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

    public function getCommentById(int $id): Comment
    {
        $res = $this->pdo->prepare('SELECT * FROM Comment WHERE id = :id');
        $res->bindValue(':id', $id, \PDO::PARAM_INT);
        $res->execute();
        $res->setFetchMode(\PDO::FETCH_ASSOC);
        return new Comment($res->fetch());
    }

    /**
     * @param int $id
     * @return bool
     */
    public function createComment($id_article, $content): bool
    {
        $date = date('j M Y G:i');
        $sql2 = 'INSERT INTO Comment(id, id_article, id_user, content, date) VALUES
    (:id, :id_article, :id_user, :content, :`date`)';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id_article', $id_article, \PDO::PARAM_INT);
        $query->bindValue(':content', $content, \PDO::PARAM_INT);
        $query->bindValue(':date', $date, \PDO::PARAM_STR);
        $query->execute();

        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function deleteCommentById(int $id): bool
    {
        $sql = 'DELETE FROM `Comment`
                WHERE `id`=:id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id', $id, \PDO::PARAM_INT);
        $query->execute();

        return true;
    }
}
