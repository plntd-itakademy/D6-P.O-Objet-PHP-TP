<?php

namespace TP_Pierre_Louis;

use TP_Pierre_Louis\Test\Classes\TestProjet;

require_once('Classes/TestProjet.php');

$testProjet = TestProjet::getInstance();
echo $testProjet->testConnexionUtilisateurInconnu();
echo '<br />';
echo $testProjet->testConnexionUtilisateurConnu();
