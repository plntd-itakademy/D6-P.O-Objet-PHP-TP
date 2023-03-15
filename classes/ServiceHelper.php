<?php

namespace TP_Pierre_Louis;

require_once('ServiceHelperInterface.php');

class ServiceHelper implements ServiceHelperInterface
{
    // Design pattern singleton
    private static $ServiceHelper = null;

    private function __construct()
    {
    }

    public static function getInstance(): ServiceHelper
    {
        if (Self::$ServiceHelper === null) {
            return new ServiceHelper;
        }
        return Self::$ServiceHelper;
    }

    public static function seConnecter($login, $motDePasse, $utilisateurs): mixed
    {
        // On récupère l'utilisateur qui correspond à l'email
        $utilisateur = Self::getUtilisateurByEmail($login, $utilisateurs);

        // On vérifie si on a bien récupéré un utilisateur et si le mot de passe de l'utilisateur correspond au mot de passe hashé
        if ($utilisateur && password_verify(
            $motDePasse,
            $utilisateur->getMotDePasse()
        )) {
            return $utilisateur;
        } else {
            return false;
        }
    }

    public static function getUtilisateurByEmail($email, $utilisateurs): mixed
    {
        // Pour chaque utilisateur parcouru, on vérifie si son email correspond à l'email demandée. Si elle correspond, on retourne l'utilisateur parcouru. Sinon, on retourne false
        foreach ($utilisateurs as $utilisateur) {
            if ($utilisateur->getEmail() === $email) return $utilisateur;
        }
        return false;
    }

    public function hasherMotDePasse($motDePasse): string
    {
        return password_hash($motDePasse, PASSWORD_DEFAULT);
    }
}
