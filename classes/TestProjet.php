<?php

namespace TP_Pierre_Louis\Test;

require_once('classes/Eleve.php');

class TestProjet
{
    public static function initData()
    {
        $data = [];

        $data['utilisateurs'] = [
            \TP_Pierre_Louis\Eleve::sInscrire('Nitard', 'Pierre-Louis', 'pl.nitard@it-students.fr', 'lol123'),
            \TP_Pierre_Louis\Eleve::sInscrire('Jean', 'Dupond', 'mail01@mail.com', 'lol12345'),
            \TP_Pierre_Louis\Eleve::sInscrire('Marine', 'Kokz', 'mail02@mail.com', 'lol12345')
        ];

        return $data;
    }
}
