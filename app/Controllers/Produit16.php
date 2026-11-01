<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit16
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $r = $this->pdo->query("SELECT * FROM commandes WHERE titre = '" . $_COOKIE['tri'] . "'");
        return $r;
    }

}
