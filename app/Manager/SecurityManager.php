<?php

namespace App\Manager;

use App\Entity\Security;
use App\Controller\SecurtityController;
use App\Fram\Factories\PDOFactory;

class SecurityManager
{
    private \PDO $pdo;
    public function __construct()
    {
        $this->pdo = PDOFactory::getMysqlConnection();
    }

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
            $mdp_hash = $utilisateur[0]['password'];

            if($pseudo && password_verify($_POST['password'], $mdp_hash) ){
                return true;
            }
            return false;

    }

    public function createAccount(array $data, \PDO $pdo){
        var_dump($data);

        $sql = 'INSERT INTO `User` (pseudo, email, password, status) VALUES (:pseudo, :email, :password, "standart")';

        $request = $pdo->prepare($sql);

        if( ( isset($data['pseudo']) && $data['pseudo'] != NULL )  &&  ( isset($data['password']) && $data['password'] != NULL ) &&  ( isset($data['email']) && $data['email'] != NULL )){

            $hash = password_hash( $data['password'], PASSWORD_DEFAULT);
            var_dump($hash);
            $request->execute(array(
                'pseudo' => htmlspecialchars($data['pseudo']),
                'email' => htmlspecialchars($data['email']),
                'password' =>  htmlspecialchars($hash)
                ));

        }













    }
}