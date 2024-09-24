<?php

namespace Form;

use Model\Entity\Users;
use Model\Repository\UserRepository;

class UserHandleRequest extends BaseHandleRequest
{
    private UserRepository $userRepository;
    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }
    public function handleInsertForm(Users $users)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscription'])) {
            extract($_POST);
            $errors = [];

            if (empty($prenom) || empty($nom) || empty($email) || empty($password)) {
                $errors[] = 'Vous devez remplir tous les champs';
            }

            if (empty($errors)) {
                $password = password_hash($password, PASSWORD_DEFAULT);

                $users->setPrenom($prenom)->setNom($nom)->setEmail($email)->setPassword($password);
                return $this;
            }

            $this->setErrorForm($errors);
            return $this;
        }
    }

    public function login(Users $users)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connexion'])) {
            extract($_POST);
            $errors = [];

            if (empty($email) || empty($password)) {
                $errors[] = 'Vous devez remplir tous les champs';
            } else {
                $user = $this->userRepository->login($email);
                if (empty($user)) {
                    $errors[] = 'Cet Email n\'a jamais été utilisé pour l\'inscription';
                } else {
                    if (!password_verify($password, $user->getPassword())) {
                        $errors[] = 'Le mot de passe est incorrect';
                    }
                }
            }

            if (empty($errors)) {
                $users->setId($user->getId())->setNom($user->getNom())->setEmail($user->getEmail())->setPassword($user->getPassword())->setPrenom($user->getPrenom());
                return $this;
            }

            $this->setErrorForm($errors);
            return $this;
        }
    }
}
