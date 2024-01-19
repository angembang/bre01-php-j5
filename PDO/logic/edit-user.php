<?php
require "../config/connexion.php";

// Vérifier si le formulaire a été soumis avec la méthode POST
if($_SERVER["REQUEST_METHOD"] === "POST")
{  
    // Récupération de l'ID de l'utilisateur
    if(isset($_POST["userId"]))
    {
        $userId = $_POST["userId"];
    }

  // Récupération des données du formulaire
  $email = $_POST["email"];
  $password = $_POST["password"];
  $first_name = $_POST["firstName"];
  $last_name = $_POST["lastName"];
  
  /* ******* Requête SQL pour mettre à jour l'utilisateur ******  */
  
  // Préparer la requête
  $editquery = $db->prepare("UPDATE users SET email = :email, 
  password = :password, first_name = :first_name, last_name = :last_name WHERE id = :id" );
  $parameters = [
      "id" => $userId,
      "email" => $email,
      "password" => $password,
      "first_name" => $first_name,
      "last_name" => $last_name
      ];
// Exécuter la requête      
 $editquery->execute($parameters);

// Rediriger vers la liste des utilisateurs 
header("Location: ../index.php");
    exit();
} else {
    // Si la méthode n'est pas POST, rediriger vers la page d'accueil
    header("Location: ../index.php");
    exit();

}



