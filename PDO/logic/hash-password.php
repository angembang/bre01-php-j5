<?php
// Stocker le mot de passe dans la variable password 
$password = "orange560";

// hasher ou crypter le mot de passe
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// Afficher le mot de passe hasher
echo $passwordHash;