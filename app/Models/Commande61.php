<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande61
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $r = $this->pdo->query("SELECT * FROM produits WHERE ville = " . $this->pdo->quote($_GET['tri']) . "");
        return $r;
    }

}
