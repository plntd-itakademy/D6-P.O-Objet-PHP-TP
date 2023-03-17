<?php

namespace TP\Entities;

class Promotion
{
    private $m_nom;

    public function __construct($nom)
    {
        $this->m_nom = $nom;
    }
}
