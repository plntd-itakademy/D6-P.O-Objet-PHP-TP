<?php

namespace TP\Entities;

require_once('Utilisateur.php');

class Enseignant extends Utilisateur
{
    protected $m_numeroTelephone;
    protected $m_module;

    public function __construct(string $m_nom, string $m_prenom, string $m_email, string $m_motDePasse, string $p_numeroTelephone, string $p_module)
    {
        parent::__construct($m_nom, $m_prenom, $m_email, $m_motDePasse);
        $this->m_numeroTelephone = $p_numeroTelephone;
        $this->m_module = $p_module;
    }

    public function setNumeroTelephone(string $p_numeroTelephone)
    {
        $this->m_numeroTelephone = $p_numeroTelephone;
    }

    public function setModule(string $p_module)
    {
        $this->m_module = $p_module;
    }
}
