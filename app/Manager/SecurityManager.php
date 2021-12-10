<?php

namespace App\Manager;

class SecurityManager
{

    public static function connexion(array $pdo): bool
    {
        $sql = 'SELECT id, email, password FROM `User` WHERE email = :email';

        $request = $pdo->prepare($sql);
        $request->execute(array(
            //$_POST[] à changer pour requete
           'pseudo' => htmlspecialchars($_POST['email'])
        ));

            $utilisateur = $request->fetchAll(PDO::FETCH_ASSOC);

            $pseudo = $utilisateur[0]['pseudo'];
            $mdp_hash = $utilisateur[0]['mot_de_passe'];

            if($pseudo && password_verify($_POST['mdp'], $mdp_hash) ){
                return true;
            }
            return false;

    }

    public function createAccount(array $data){

        $sql = 'INSERT INTO `User` (pseudo, email, password) VALUES (:pseudo, :email, :password, "standart")';
        $request = $pdo->prepare($sql);

        if( ( isset($data['pseudo']) && $data['pseudo'] != NULL )  &&  ( isset($data['password']) && $data['password'] != NULL ) ){

            $hash = password_hash( $data['password'], PASSWORD_DEFAULT);
            var_dump($hash);
            $request->execute(array(
                'pseudo' => htmlspecialchars($data['pseudo']),
                'email' => htmlspecialchars($data['email']),
                'mdp' =>  htmlspecialchars($hash)
                ));
            return true;

        }
        return false;













        $sql = 'INSERT INTO `User` (pseudo, email, password) VALUES (:pseudo, :email, :password)';
    return true;

    }














}