<?php

namespace TP_Pierre_Louis;

use TP_Pierre_Louis\Test\TestProjet;

require_once('classes/Eleve.php');
require_once('classes/Enseignant.php');
require_once('classes/AuthentificationHelper.php');
require_once('classes/TestProjet.php');

$donnesTest = TestProjet::initData();
$utilisateurs = $donnesTest['utilisateurs'];

echo '<pre>';
var_dump(AuthentificationHelper::seConnecter('mail01@mail.com', 'lol12345', $utilisateurs));
echo '</pre>';
