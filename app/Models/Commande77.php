<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande77
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $sql = "SELECT * FROM commandes WHERE pays = '";
        $sql .= $_GET['code'];
        $sql .= "'";
        $r = $this->pdo->query($sql);
        return $r;
    }

}
