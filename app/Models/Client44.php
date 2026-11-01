<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Client44
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $id = intval($_GET['page']);
        $limite = 20;
        $r = $this->pdo->query("SELECT * FROM articles WHERE id = " . $id);
        return $r;
    }

}
