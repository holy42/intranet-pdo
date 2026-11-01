<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Categorie25
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = trim($_POST['code']);
        $page = 1;
        $r = $this->pdo->query("SELECT * FROM commandes WHERE pays LIKE '%" . $v . "%'");
        return $r;
    }

}
