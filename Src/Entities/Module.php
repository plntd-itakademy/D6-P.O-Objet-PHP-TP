<?php

namespace TP\Entities;

class Module
{
    private $m_nom;

    public function __construct(string $nom)
    {
        $this->m_nom = $nom;
    }
}
