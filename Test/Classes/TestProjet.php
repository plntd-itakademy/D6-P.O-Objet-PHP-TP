<?php

namespace TP_Pierre_Louis\Test\Classes;

use TP_Pierre_Louis\Services\ServiceHelper;
use TP_Pierre_Louis\Entities\Eleve;
use TP_Pierre_Louis\Entities\Enseignant;

require_once('../Src/Entities/Eleve.php');
require_once('../Src/Entities/Enseignant.php');

class TestProjet
{
    // Design pattern singleton
    private static $m_TestProjet = null;
    private $m_eleves;
    private $m_enseignants;
    private $m_utilisateurs;

    private function __construct()
    {
        $this->initData();
    }

    public static function getInstance()
    {
        if (Self::$m_TestProjet === null) {
            Self::$m_TestProjet = new TestProjet;
        }
        return Self::$m_TestProjet;
    }

    /**
     * Initialisation des jeux de données pour les tests.
     *
     * @return void
     */
    public function initData()
    {
        $data = [];

        // Mise en place d'un tableau qui contient tous les élèves
        $data['eleves'] = [
            Eleve::sInscrire('Nitard', 'Pierre-Louis', 'pl.nitard@it-students.fr', 'CZkn!6yhNruWWW#r$sH'),
            Eleve::sInscrire('Jean', 'Dupond', 'mail01@mail.com', 'O3sGf&r3VD4Sap!#H3@'),
            Eleve::sInscrire('Marine', 'Kokz', 'mail02@mail.com', 'TIO1Prg07j@dwwXZ4zv')
        ];

        // Mise en place d'un tableau qui contient tous les enseignants
        $data['enseignants'] = [
            Enseignant::sInscrire('Julio', 'Ribeiro', 'j.ribeiro@mail.com', 'kz!fFYJ2T5hmZjWo', '0768764523', 'T16'),
        ];

        // On merge les tableaux des élèves et des étudiants pour rassembler tous les utilisateurs
        $this->m_utilisateurs = array_merge($data['eleves'], $data['enseignants']);

        $this->m_eleves = $data['eleves'];
        $this->m_enseignants = $data['enseignants'];
    }

    public function getUtilisateurs(): array
    {
        return $this->m_utilisateurs;
    }

    /**
     * Test si un utilisateur est inconnu.
     *
     * @return string Retourne "OK" si l'utilisateur est inconnu avec les identifiants donnés. Sinon, retourne "KO".
     */
    public function testConnexionUtilisateurInconnu(): string
    {
        $login = 'mail01@mail.com';
        $motDePasse = 'O3sGf&r3VD4Sap!#H3@';

        // Appelle de la fonction seConnecter du ServiceHelper. Celle-ci doit retourner false, dans le cas où les identifiants sont incorrects.
        if (!ServiceHelper::seConnecter($login, $motDePasse, $this->m_utilisateurs)) {
            return 'testConnexionUtilisateurInconnu : OK';
        } else {
            return 'testConnexionUtilisateurInconnu : KO';
        }
    }

    /**
     * Test si un utilisateur est connu.
     *
     * @return string Retourne "OK" si l'utilisateur est connu avec les identifiants donnés. Sinon, retourne "KO".
     */
    public function testConnexionUtilisateurConnu(): string
    {
        $login = 'mail01@mail.com';
        $motDePasse = 'O3sGf&r3VD4Sap!#H3@';

        // Appelle de la fonction seConnecter du ServiceHelper. Celle-ci doit retourner un utilisateur, dans le cas où les identifiants sont corrects.
        if (ServiceHelper::seConnecter($login, $motDePasse, $this->m_utilisateurs)) {
            return 'testConnexionUtilisateurConnu : OK';
        } else {
            return 'testConnexionUtilisateurConnu : KO';
        }
    }
}
