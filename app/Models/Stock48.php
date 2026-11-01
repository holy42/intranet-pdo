<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock48
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $id = intval($_GET['id']);
        $page = 1;
        $r = $this->pdo->query("SELECT * FROM clients WHERE id = " . $id);
        return $r;
    }

}
