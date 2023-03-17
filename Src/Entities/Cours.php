<?php

namespace TP\Entities;

class Cours
{
    private $m_titre;
    private $m_contenu;
    private $m_module;
    private $m_promotion;

    public function __construct(string $p_titre, string $p_contenu, Module $p_module, Promotion $p_promotion)
    {
        $this->m_titre = $p_titre;
        $this->m_contenu = $p_contenu;
        $this->m_module = $p_module;
        $this->m_promotion = $p_promotion;
    }
}
