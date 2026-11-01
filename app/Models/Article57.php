<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article57
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $table = 'utilisateurs';
        $r = $this->pdo->query("SELECT * FROM " . $table . " WHERE actif = 1");
        return $r;
    }

}
