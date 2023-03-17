<?php

namespace TP\Entities;

class Devoir
{
    private $m_titre;
    private $m_contenu;
    private $m_noteMax;
    private $m_deadline;
    private $m_enseignant;
    private $m_promotion;

    public function __construct(string $p_titre, string $p_contenu, int $p_noteMax, string $p_deadline, Enseignant $p_enseignant, Promotion $p_promotion)
    {
        $this->m_titre = $p_titre;
        $this->m_contenu = $p_contenu;
        $this->m_noteMax = $p_noteMax;
        $this->m_deadline = $p_deadline;
        $this->m_enseignant = $p_enseignant;
        $this->m_promotion = $p_promotion;
    }
}
