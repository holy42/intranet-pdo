<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock24
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['tri'];
        $limite = 20;
        $r = $this->pdo->query("SELECT * FROM utilisateurs WHERE pays = '" . $v . "'");
        return $r;
    }

}
