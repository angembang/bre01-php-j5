<?php
// Inclure le fichier de connexion à la base de données qui se trouve dans config/connexion.php
/*require "../config/connexion.php";
// Récupérer l'id avec la méthode GET
{
    $userId = $_GET["id"];
}
// Préparer la requête de suppression
$request = $db->prepare("DELETE FROM users WHERE id = :id");
$parameters = [
    "id" => $userId
    ];

// Vérifier si l'utilisateur est supprimé
if ($request->execute($parameters)) {
        // si oui, afficher le message de succès
       echo '<script language="Javascript">';
       echo'alert("Utilisateur supprimé avec succès")';
       echo'setTimeout(function(){ window.location.href = "../index.php"; }, 2000)';
      echo'</script>';
       
    } else {
        // sinon, afficher l'erreur de suppression
       echo "Erreur lors de la suppression de l'utilisateur";
    };
    
    exit();

*/

// Inclure le fichier de connexion à la base de données qui se trouve dans config/connexion.php
require "../config/connexion.php";

// Récupérer l'id avec la méthode GET
if (isset($_GET["id"])) {
    $userId = $_GET["id"];
}

// Préparer la requête de suppression
$request = $db->prepare("DELETE FROM users WHERE id = :id");
$parameters = [
    "id" => $userId
];

// Vérifier si l'utilisateur est supprimé
/*if ($request->execute($parameters)) {
    // si oui, afficher le message de succès
    echo '<script language="Javascript">';
    echo 'alert("Utilisateur supprimé avec succès");';
    echo 'setTimeout(function(){ window.location.href = "../index.php"; }, 50);'; 
    echo '</script>';
} else {
    // sinon, afficher l'erreur de suppression
    echo "Erreur lors de la suppression de l'utilisateur";
}

exit();*/

// ...

if ($request->execute($parameters)) {
    // si oui, rediriger avec une variable GET
    header('Location: ../index.php?delete_success=true');
} else {
    // sinon, rediriger avec une variable GET
    header('Location: ../index.php?delete_success=false');
}

exit();
?>