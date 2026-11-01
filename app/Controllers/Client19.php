<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Client19
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['q'];
        $page = 1;
        $r = $this->pdo->query("SELECT * FROM commandes WHERE titre = '" . $v . "'");
        return $r;
    }

}
