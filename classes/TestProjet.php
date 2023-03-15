<?php

namespace TP_Pierre_Louis\Test;

use TP_Pierre_Louis\ServiceHelper;
use \TP_Pierre_Louis\Eleve;

require_once('ServiceHelperInterface.php');
require_once('Eleve.php');

class TestProjet
{
    private $m_helper;
    private $m_utilisateurs;

    public function __construct()
    {
        $this->initData();
        $this->m_helper = ServiceHelper::getInstance();
    }

    public function initData()
    {
        $data = [];

        $data['utilisateurs'] = [
            Eleve::sInscrire('Nitard', 'Pierre-Louis', 'pl.nitard@it-students.fr', 'CZkn!6yhNruWWW#r$sH'),
            Eleve::sInscrire('Jean', 'Dupond', 'mail01@mail.com', 'O3sGf&r3VD4Sap!#H3@'),
            Eleve::sInscrire('Marine', 'Kokz', 'mail02@mail.com', 'TIO1Prg07j@dwwXZ4zv')
        ];

        $this->m_utilisateurs = $data['utilisateurs'];
    }

    public function testConnexionUtilisateurInconnu(): string
    {
        $login = 'mail01@mail.com';
        $motDePasse = 'O3sGf&r3VD4Sap!#H3@';

        if ($this->m_helper->seConnecter($login, $motDePasse, $this->m_utilisateurs)) {
            return 'testConnexionUtilisateurInconnu : KO';
        } else {
            return 'testConnexionUtilisateurInconnu : OK';
        }
    }

    public function getUtilisateurs(): array
    {
        return $this->m_utilisateurs;
    }
}
