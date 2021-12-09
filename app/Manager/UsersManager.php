<?php

namespace App\Manager;

use App\Entity\Users;
use App\Fram\Factories\PDOFactory;

class UsersManager extends BaseManager
{
    public function getAllUsers(int $number): array

    {
        $sql = 'SELECT * FROM User ';

        if($number){
            $query = $this->pdo->prepare($sql .'LIMIT :limit');
            $query->bindValue(':limit', $number, \PDO::PARAM_INT);
            $query->execute();
        } else {
            $query = $this->pdo->prepare($sql);
            $query->execute();
        }
        $query->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Users');
        if ($query){
            //var_dump($query->fetchAll());die();

            return $query->fetchAll();
        }
        return [$query];
    }
}