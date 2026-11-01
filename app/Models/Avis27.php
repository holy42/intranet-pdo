<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Avis27
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = trim($_POST['nom']);
        $page = 1;
        $r = $this->pdo->query("SELECT * FROM clients WHERE titre LIKE '%" . $v . "%'");
        return $r;
    }

}
