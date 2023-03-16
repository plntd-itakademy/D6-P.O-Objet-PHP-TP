<?php

namespace TP_Pierre_Louis\Services\Interfaces;

require_once('../Src/Services/ServiceHelper.php');

interface ServiceHelperInterface
{
    public static function seConnecter(string $login, string $motDePasse): mixed;
    public static function getUtilisateurByEmail(string $email): mixed;
    public static function hasherMotDePasse(string $motDePasse): string;
}
