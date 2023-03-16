<?php

namespace TP_Pierre_Louis\Entities;

class Cours
{
    private $m_titre;
    private $m_contenu;
    private $m_module;
    private $m_promotion;

    public function __construct(string $p_titre, string $p_contenu, Module $p_module, Promotion $p_promotion)
    {
    }
}
