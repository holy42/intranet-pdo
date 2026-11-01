<?php
// Fichier généré pour tester la plateforme de maintenance. Code VOLONTAIREMENT vulnérable : ne jamais déployer.
class Rapport96
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function action1()
    {
        $total = 0;
        for ($i = 0; $i < 10; $i++) {
            $total += $i;
        }
        return $total;
    }

}
