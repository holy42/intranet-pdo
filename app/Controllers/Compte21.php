<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Compte21
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['ref'];
        $limite = 20;
        $r = $this->pdo->query("SELECT * FROM clients WHERE code = '" . $v . "'");
        return $r;
    }

}
