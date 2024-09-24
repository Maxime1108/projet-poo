<?php

namespace Controller;

use Form\UserHandleRequest;
use Model\Entity\Users;
use Model\Repository\UserRepository;

class UserController extends BaseController
{

    private Users $users;
    private UserHandleRequest $form;
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->users = new Users;
        $this->form = new UserHandleRequest;
        $this->userRepository = new UserRepository;
    }

    public function inscription()
    {

        $this->form->handleInsertForm($this->users);

        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $register = $this->userRepository->insertUser($this->users);

            if ($register) {
                // Par exemple rediriger vers la page de connexion
            }
        }

        $errors = $this->form->getErrorForm();
        $this->render('inscription/inscription.html.php', [
            'errors' => $errors
        ]);
    }

    public function login()
    {
        $this->form->login($this->users);

        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $this->redirectToRoute(['home', 'index']);
        }
        $this->render('connexion/connexion.html.php');
    }
}
