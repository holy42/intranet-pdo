<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie73
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['page'];
        $r = $this->pdo->query("SELECT * FROM utilisateurs WHERE ville = '$v'");
        return $r;
    }

}
