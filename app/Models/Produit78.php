<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Produit78
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $sql = "SELECT * FROM categories WHERE titre = '";
        $sql .= $_GET['nom'];
        $sql .= "'";
        $r = $this->pdo->query($sql);
        return $r;
    }

}
