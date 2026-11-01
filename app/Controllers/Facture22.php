<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Facture22
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['page'];
        $ordre = 'asc';
        $r = $this->pdo->query("SELECT * FROM produits WHERE nom = '" . $v . "'");
        return $r;
    }

}
