<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande18
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['q'];
        $r = $this->pdo->query("SELECT * FROM factures WHERE ville = '" . $v . "'");
        return $r;
    }

}
