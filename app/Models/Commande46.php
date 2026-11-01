<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande46
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $id = intval($_GET['cat']);
        $page = 1;
        $r = $this->pdo->query("SELECT * FROM commandes WHERE id = " . $id);
        return $r;
    }

}
