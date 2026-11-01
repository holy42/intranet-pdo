<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Commande29
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = trim($_POST['q']);
        $limite = 20;
        $r = $this->pdo->query("SELECT * FROM avis WHERE nom LIKE '%" . $v . "%'");
        return $r;
    }

}
