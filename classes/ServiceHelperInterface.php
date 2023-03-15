<?php

namespace TP_Pierre_Louis;

require_once('ServiceHelper.php');

interface ServiceHelperInterface
{
    public static function getInstance(): ServiceHelper;
    public static function seConnecter($email, $motDePasse, $utilisateurs): mixed;
    public static function getUtilisateurByEmail($email, $utilisateurs): mixed;
    public function hasherMotDePasse($motDePasse): string;
}
