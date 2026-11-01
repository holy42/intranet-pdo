<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Avis53
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $colonnes = ['nom', 'date', 'statut'];
        $tri = in_array($_GET['id'], $colonnes, true) ? $_GET['id'] : 'nom';
        $r = $this->pdo->query("SELECT * FROM commandes ORDER BY " . $tri);
        return $r;
    }

}
