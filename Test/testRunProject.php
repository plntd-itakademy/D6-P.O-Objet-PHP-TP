<?php

namespace TP;

use TP\Test\Classes\TestProjet;

require_once('Classes/TestProjet.php');
require_once('../Src/Services/CoursRepository.php');
require_once('../Src/Services/UtilisateurRepository.php');
require_once('../Src/Services/Interfaces/ServiceHelperInterface.php');
require_once('../Src/Entities/Eleve.php');
require_once('../Src/Entities/Enseignant.php');
require_once('../Src/Entities/Module.php');
require_once('../Src/Entities/Promotion.php');
require_once('../Src/Entities/Cours.php');
require_once('../Src/Entities/Devoir.php');
require_once('../Src/Entities/DevoirRendu.php');

$testProjet = TestProjet::getInstance();

echo "<h2>Affichage des utilisateurs</h2>";
echo '<pre>';
var_dump($testProjet->getUtilisateurs());
echo '</pre>';

echo "<h2>Test d'un utilisateur connu/inconnu</h2>";
echo $testProjet->testConnexionUtilisateurInconnu();
echo '<br />';
echo $testProjet->testConnexionUtilisateurConnu();

echo "<h2>Test d'un devoir rendu</h2>";
echo '<pre>';
var_dump($testProjet->testRendreDevoir());
echo '</pre>';

echo "<h2>Test d'un dépôt d'un devoir par un enseignant</h2>";
echo '<pre>';
var_dump($testProjet->testDeposerDevoir());
echo '</pre>';
