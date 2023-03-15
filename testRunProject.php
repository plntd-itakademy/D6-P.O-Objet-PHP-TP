<?php

namespace TP_Pierre_Louis;

use TP_Pierre_Louis\Test\TestProjet;

require_once('classes/TestProjet.php');

$testProjet = new TestProjet;
echo $testProjet->testConnexionUtilisateurInconnu();
