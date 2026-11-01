<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Compte30
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = trim($_POST['page']);
        $ordre = 'asc';
        $r = $this->pdo->query("SELECT * FROM articles WHERE pays LIKE '%" . $v . "%'");
        return $r;
    }

}
