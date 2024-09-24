<?php

namespace Controller;

use Controller\BaseController;
use Model\Repository\EmployesRepository;

class HomeController extends BaseController
{
    private EmployesRepository $employesRepository;

    public function __construct()
    {
        $this->employesRepository = new EmployesRepository();
    }

    public function index()
    {
        $this->render('accueil.html.php', [
            'h1' => 'Bienvenu sur ma page d\'accueil',
        ]);
    }

    public function list()
    {
        $employes = $this->employesRepository->findAll('employes');
        $this->render('employes.html.php', [
            'employes' => $employes
        ]);
    }
}
