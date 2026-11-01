<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Rapport59
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $r = $this->pdo->query("SELECT * FROM factures WHERE pays = " . $this->pdo->quote($_GET['page']) . "");
        return $r;
    }

}
