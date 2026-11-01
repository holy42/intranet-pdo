<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Livraison56
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $table = 'clients';
        $r = $this->pdo->query("SELECT * FROM " . $table . " WHERE actif = 1");
        return $r;
    }

}
