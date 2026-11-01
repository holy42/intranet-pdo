<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit13
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $r = $this->pdo->query("INSERT INTO articles (nom) VALUES ('" . $_POST['ref'] . "')");
        return $r;
    }

}
