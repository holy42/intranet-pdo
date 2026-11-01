<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Facture45
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $id = intval($_GET['id']);
        $limite = 20;
        $r = $this->pdo->query("SELECT * FROM commandes WHERE id = " . $id);
        return $r;
    }

}
