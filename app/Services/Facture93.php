<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Facture93
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM avis WHERE id = ?");
        $stmt->execute([1]);
        return $stmt;
    }

}
