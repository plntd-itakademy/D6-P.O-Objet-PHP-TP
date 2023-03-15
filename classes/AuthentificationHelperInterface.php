<?php

namespace TP_Pierre_Louis;

interface AuthentificationHelperInterface
{
    public static function seConnecter($email, $motDePasse, $utilisateurs): mixed;
    public static function getUtilisateurByEmail($email, $utilisateurs): mixed;
}
