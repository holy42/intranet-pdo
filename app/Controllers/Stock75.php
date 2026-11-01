<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock75
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['cat'];
        $r = $this->pdo->query("SELECT * FROM avis WHERE statut = '$v'");
        return $r;
    }

}
