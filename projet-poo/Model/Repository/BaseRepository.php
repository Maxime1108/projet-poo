<?php

namespace Model\Repository;

use Model\Database;

abstract class BaseRepository
{

    protected $db_connexion;

    public function __construct()
    {
        $db = new Database;
        $this->db_connexion = $db->dbConnect();
    }

    public function findAll($nomTable)
    {
        $sql = "SELECT * FROM $nomTable";

        $request = $this->db_connexion->query($sql);

        if ($request) { // Retourne un booleen
            $class = "Model\Entity\\" . ucfirst($nomTable); // On récupère le chemin de l'entité visée 

            return $request->fetchAll(\PDO::FETCH_CLASS, $class); // Récupère tous les résultats de la requête (fetchAll) puis les convertis en objet de classe que nous avons visée
        }
        return null;
    }
}
