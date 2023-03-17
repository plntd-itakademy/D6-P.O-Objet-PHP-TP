<?php

namespace TP\Services;

use TP\Services\Interfaces\ServiceHelperInterface;

class ServiceHelper implements ServiceHelperInterface
{
    /**
     * Hash un mot de passe
     *
     * @param  string $motDePasse
     * @return string Le mot de passe hashé.
     */
    public static function hasherMotDePasse(string $motDePasse): string
    {
        return password_hash($motDePasse, PASSWORD_DEFAULT);
    }
}
