<?php

namespace TP_Pierre_Louis;

use TP_Pierre_Louis\Test\TestProjet;

require_once('classes/ServiceHelperInterface.php');
require_once('classes/Eleve.php');
require_once('classes/Enseignant.php');
require_once('classes/TestProjet.php');

$testProjet = new TestProjet;

echo '<pre>';
var_dump(ServiceHelper::seConnecter('mail01@mail.com', 'O3sGf&r3VD4Sap!#H3@', $testProjet->getUtilisateurs()));
echo '</pre>';
