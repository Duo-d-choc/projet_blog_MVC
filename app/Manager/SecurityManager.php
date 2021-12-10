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

    public static function createAccount(array $data){


        if( ( isset($_POST['pseudo']) && $_POST['pseudo'] != NULL )  &&  ( isset($_POST['mdp']) && $_POST['mdp'] != NULL )   &&  ( isset($_POST['mdp2'])  && $_POST['mdp2'] != NULL )         ){

            //if($_POST['mdp'] === $_POST['mdp2']){
              //$hash = password_hash( $_POST['mdp'], PASSWORD_DEFAULT);
              //echo $hash;
                //$requete->execute(array(
                //'pseudo' => htmlspecialchars($_POST['pseudo']),
                //'mot_de_passe' =>  htmlspecialchars($hash)
                //));

                header('Location: index.php');
                exit;

            }else{
                echo "Vos mots de passes ne correspondent pas !";
            }


            // Si manque un élément
        }else{
            return "Vous n'avez pas rempli tous les éléments";
        }













        $sql = 'INSERT INTO `User` (pseudo, email, password) VALUES (:pseudo, :email, :password)';
    return true;

    }














}