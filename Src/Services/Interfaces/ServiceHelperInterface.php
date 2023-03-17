<?php

namespace TP\Services\Interfaces;

require_once('../Src/Services/ServiceHelper.php');

interface ServiceHelperInterface
{
    public static function hasherMotDePasse(string $motDePasse): string;
}
