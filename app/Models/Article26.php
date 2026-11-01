<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article26
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = trim($_POST['nom']);
        $ordre = 'asc';
        $r = $this->pdo->query("SELECT * FROM produits WHERE email LIKE '%" . $v . "%'");
        return $r;
    }

}
