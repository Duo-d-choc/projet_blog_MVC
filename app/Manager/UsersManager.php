<?php

namespace App\Manager;

use App\Entity\Users;
use App\Fram\Factories\PDOFactory;
use http\Client\Curl\User;

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

    public function getUserById(int $id): Users
    {
        $req = $this->pdo->prepare('SELECT * FROM User WHERE id = :id');
        $req->bindValue(':id', $id, \PDO::PARAM_INT);
        $req->execute();
        $req->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'App\Entity\Users');
        return $req->fetch();
    }
}