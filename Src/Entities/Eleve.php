<?php

namespace TP\Entities;

require_once('Utilisateur.php');

class Eleve extends Utilisateur
{
    public function __construct(string $m_nom, string $m_prenom, string $m_email, string $m_motDePasse)
    {
        parent::__construct($m_nom, $m_prenom, $m_email, $m_motDePasse);
    }
}
