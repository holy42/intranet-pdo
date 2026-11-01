<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Avis79
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $sql = "SELECT * FROM utilisateurs WHERE pays = '";
        $sql .= $_GET['ville'];
        $sql .= "'";
        $r = $this->pdo->query($sql);
        return $r;
    }

}
