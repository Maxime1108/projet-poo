<?php

namespace Model\Repository;

use Model\Entity\Users;

class UserRepository extends BaseRepository
{
    public function insertUser(Users $user)
    {
        $sql = "INSERT INTO users (prenom,nom,email,password) VALUES (:prenom,:nom,:email,:password)";

        $request = $this->db_connexion->prepare($sql);
        $request->bindValue(':prenom', $user->getPrenom());
        $request->bindValue(':nom', $user->getNom());
        $request->bindValue(':email', $user->getEmail());
        $request->bindValue(':password', $user->getPassword());

        $request = $request->execute();
        if ($request) {
            $_SESSION['inscription_success'] = 'Votre inscription s\'est bien déroulée';
            return true;
        } else {
            $_SESSION['inscription_erreur'] = 'Il y\'a eu un problème lors de votre inscription';
            return false;
        }
    }

    public function login(string $email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";

        $request = $this->db_connexion->prepare($sql);
        $request->bindValue(':email', $email);

        if ($request->execute()) {
            $request->setFetchMode(\PDO::FETCH_CLASS, 'Model\Entity\Users');
            return $request->fetch();
        } else {
            return null;
        }
    }
}
