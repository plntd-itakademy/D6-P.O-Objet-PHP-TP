<?php

namespace TP\Entities;

class DevoirRendu
{
    private $m_etudiant;
    private $m_note;
    private $m_contenu;
    private $m_devoirEnseignant;

    public function __construct(Eleve $p_etudiant, float $p_note, string $p_contenu, Devoir $p_devoirEnseignant)
    {
        $this->m_etudiant = $p_etudiant;
        $this->m_note = $p_note;
        $this->m_contenu = $p_contenu;
        $this->m_devoirEnseignant = $p_devoirEnseignant;
    }
}
