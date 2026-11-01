<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Article20
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = $_GET['cat'];
        $ordre = 'asc';
        $r = $this->pdo->query("SELECT * FROM messages WHERE ville = '" . $v . "'");
        return $r;
    }

}
