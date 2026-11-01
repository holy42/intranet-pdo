<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit17
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['tri'];
        $page = 1;
        $r = $this->pdo->query("SELECT * FROM avis WHERE ville = '" . $v . "'");
        return $r;
    }

}
