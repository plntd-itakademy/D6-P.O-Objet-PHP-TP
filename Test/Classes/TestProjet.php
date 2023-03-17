<?php

namespace TP\Test\Classes;

use TP\Services\CoursRepository;
use TP\Services\UtilisateurRepository;
use TP\Entities\Eleve;
use TP\Entities\Enseignant;
use TP\Entities\Devoir;
use TP\Entities\DevoirRendu;

class TestProjet
{
    // Design pattern singleton
    private static $m_TestProjet = null;
    private $m_eleves;
    private $m_enseignants;
    private $m_utilisateurs;
    private $m_devoirs;

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
            new Eleve('Nitard', 'Pierre-Louis', 'pl.nitard@it-students.fr', 'CZkn!6yhNruWWW#r$sH'),
            new Eleve('Jean', 'Dupond', 'mail01@mail.com', 'O3sGf&r3VD4Sap!#H3@'),
            new Eleve('Marine', 'Kokz', 'mail02@mail.com', 'TIO1Prg07j@dwwXZ4zv')
        ];

        // Mise en place d'un tableau qui contient tous les enseignants
        $data['enseignants'] = [
            new Enseignant('Julio', 'Ribeiro', 'j.ribeiro@mail.com', 'kz!fFYJ2T5hmZjWo', '0768764523', 'D6')
        ];

        $data['devoirs'] = [
            new Devoir("Devoir 1", "Faire l'exercice 1", 100, '30/03/2023', $data['enseignants'][0])
        ];

        // On merge les tableaux des élèves et des enseignants afin de mettre tous les utilisateurs dans un même tableau
        $this->m_utilisateurs = array_merge($data['eleves'], $data['enseignants']);

        $this->m_eleves = $data['eleves'];
        $this->m_enseignants = $data['enseignants'];
        $this->m_devoirs = $data['devoirs'];
    }

    public function getUtilisateurs(): array
    {
        return $this->m_utilisateurs;
    }

    public function getEleves(): array
    {
        return $this->m_eleves;
    }

    public function getEnseignants(): array
    {
        return $this->m_enseignants;
    }

    public function getDevoirs(): array
    {
        return $this->m_devoirs;
    }

    /**
     * Test si un utilisateur est inconnu.
     *
     * @return string Retourne "OK" si l'utilisateur est inconnu avec les identifiants donnés. Sinon, retourne "KO".
     */
    public function testConnexionUtilisateurInconnu(): string
    {
        $helperUtilisateur = new UtilisateurRepository;
        $login = 'mail01@mail.com';
        $motDePasse = 'O3sGf&r3VD4Sap!#H3@';

        // Appelle de la fonction seConnecter du ServiceHelper. Celle-ci doit retourner false, dans le cas où les identifiants sont incorrects.
        if (!$helperUtilisateur->seConnecter($login, $motDePasse, $this->m_utilisateurs)) {
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
        $helperUtilisateur = new UtilisateurRepository;
        $login = 'mail01@mail.com';
        $motDePasse = 'O3sGf&r3VD4Sap!#H3@';

        // Appelle de la fonction seConnecter du ServiceHelper. Celle-ci doit retourner un utilisateur, dans le cas où les identifiants sont corrects.
        if ($helperUtilisateur->seConnecter($login, $motDePasse, $this->m_utilisateurs)) {
            return 'testConnexionUtilisateurConnu : OK';
        } else {
            return 'testConnexionUtilisateurConnu : KO';
        }
    }

    /**
     * Test le rendu d'un devoir
     *
     * @return DevoirRendu
     */
    public function testRendreDevoir(): DevoirRendu
    {
        $helperCours = new CoursRepository;
        $eleve = $this->getEleves()[0];
        $devoir = $this->getDevoirs()[0];

        return $helperCours->rendreDevoir($eleve, 0, 'Contenu devoir', $devoir);
    }

    /**
     * Test le depôt d'un devoir
     *
     * @return Devoir
     */
    public function testDeposerDevoir(): Devoir
    {
        $helperCours = new CoursRepository;
        $enseignant = $this->getEnseignants()[0];

        return $helperCours->deposerDevoir("Devoir 1", "Faire l'exercice", 100, "30/03/2023", $enseignant);
    }
}
