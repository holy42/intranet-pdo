<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Message80
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $r = mysqli_query($this->pdo, "SELECT * FROM factures WHERE titre = '" . $_GET['code'] . "'");
        return $r;
    }

}
