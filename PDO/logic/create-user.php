<?php
// Inclure le fichier de connexion à la base de donnée qui se trouve dans config/connexion.php
/*require "../config/connexion.php";

// Vérifier si le formulaire a été soumis avec la méthode POST
if($_SERVER["REQUEST_METHOD"]=== "POST")
{
    // Récupérarion des données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

// Requête SQL pour ajouter l'utilisateur à la base de données
$query = $db->prepare("INSERT INTO users (email, password, first_name, last_name)) 
VALUES (:email, :password, :first_name, :last_name");

// Paramètres pour la requête préparée
$parameters = [
    "email" => $email,
    "password" => $password,
    "first_name" => $first_name,
    "last_name" => $last_name
    ];
    // Exécuter la requête
    $query->execute($parameters);
    
     // Rediriger vers la liste des utilisateurs 
     header("Location: ../index.php");
     exit();
} else {
    // Si la méthode n'est pas POST, rediriger vers la page d'accueil
    header("Location: ../index.php");
    exit();
} */


// Inclure le fichier de connexion à la base de données qui se trouve dans config/connexion.php
require "../config/connexion.php";

// Vérifier si le formulaire a été soumis avec la méthode POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récupération des données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];
    $first_name = $_POST["firstName"];
    $last_name = $_POST["lastName"];

    // Requête SQL pour ajouter l'utilisateur à la base de données
    $query = $db->prepare("INSERT INTO users (email, password, first_name, last_name) 
    VALUES (:email, :password, :first_name, :last_name)");

    // Paramètres pour la requête préparée
    $parameters = [
        "email" => $email,
        "password" => $password,
        "first_name" => $first_name,
        "last_name" => $last_name
    ];

    // Exécuter la requête
    $query->execute($parameters);

    // Rediriger vers la liste des utilisateurs 
    header("Location: ../index.php");
    exit();
} else {
    // Si la méthode n'est pas POST, rediriger vers la page d'accueil
    header("Location: ../index.php");
    exit();
}
?>