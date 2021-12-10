<?php

namespace App\Manager;

use App\Entity\Security;
use App\Controller\SecurtityController;
use App\Fram\Factories\PDOFactory;

class SecurityManager
{


    public function connexion(array $data, \PDO $pdo):void
    {

        $sql = 'SELECT id, email, password FROM `User` WHERE email = :email';

        $request = $pdo->prepare($sql);
        $response = $request->execute(array(
           'email' => htmlspecialchars($data['email'])
        ));

        $utilisateur = $request->fetchAll(\PDO::FETCH_ASSOC);

        $pseudo = $utilisateur['pseudo'];
        $mdp_hash = $utilisateur['password'];

        //$pseudo = $utilisateur[0]['pseudo'];
        //$mdp_hash = $utilisateur[0]['password'];

        if($pseudo && password_verify($data['password'], $mdp_hash) ){
            $_SESSION['token'] = true;
        }
        $_SESSION['token'] = false;


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