<?php

namespace App\Manager;

use App\Entity\Security;
use App\Controller\SecurtityController;
use App\Entity\Users;
use App\Fram\Factories\PDOFactory;
use http\Client\Curl\User;

class SecurityManager
{


    public function connexion(array $data, \PDO $pdo):void
    {

        $sql = 'SELECT * FROM `User` WHERE email = :email';

        $request = $pdo->prepare($sql);
        $response = $request->execute(array(
           'email' => htmlspecialchars($data['email'])
        ));
        //Va directement compléter la class->Users
        //$request->setFetchMode(\PDO::FETCH_CLASS, Users::class);
        $utilisateur = $request->fetch(\PDO::FETCH_ASSOC);

        $pseudo = $utilisateur['pseudo'];
        $email = $utilisateur['email'];
        $mdp_hash = $utilisateur['password'];
        
        if($email && password_verify($data['password'], $mdp_hash) ){
            $_SESSION['token'] = true;
            $_SESSION['pseudo'] = "test";
            header('Location: /');
            exit;
        }else{
            $_SESSION['token'] = false;
            $_SESSION['pseudo'] = "";
        }


    }




    public function createAccount(array $data, \PDO $pdo){

        $sql = 'INSERT INTO `User` (pseudo, email, password, status) VALUES (:pseudo, :email, :password, "standart")';
        $request = $pdo->prepare($sql);

        if( ( isset($data['pseudo']) && $data['pseudo'] != NULL )  &&  ( isset($data['password']) && $data['password'] != NULL ) &&  ( isset($data['email']) && $data['email'] != NULL )){

            $hash = password_hash( $data['password'], PASSWORD_DEFAULT);
            $request->execute(array(
                'pseudo' => htmlspecialchars($data['pseudo']),
                'email' => htmlspecialchars($data['email']),
                'password' =>  htmlspecialchars($hash)
                ));

        }
    }



}