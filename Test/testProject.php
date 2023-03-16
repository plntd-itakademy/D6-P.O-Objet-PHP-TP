<?php

namespace TP_Pierre_Louis;

use TP_Pierre_Louis\Services\ServiceHelper;
use TP_Pierre_Louis\Test\Classes\TestProjet;

require_once('../Src/Services/Interfaces/ServiceHelperInterface.php');
require_once('../Src/Entities/Eleve.php');
require_once('../Src/Entities/Enseignant.php');

$testProjet = TestProjet::getInstance();
$utilisateurs = $testProjet->getUtilisateurs();

echo '<pre>';
// var_dump(ServiceHelper::seConnecter('mail01@mail.com', 'O3sGf&r3VD4Sap!#H3@'));

// Afficher tous les utilisateurs
var_dump($utilisateurs);
echo '</pre>';
