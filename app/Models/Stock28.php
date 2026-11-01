<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Stock28
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $v = trim($_POST['cat']);
        $limite = 20;
        $r = $this->pdo->query("SELECT * FROM messages WHERE email LIKE '%" . $v . "%'");
        return $r;
    }

}
