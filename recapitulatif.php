<?php
require __DIR__ . "/classes/client.php";
require __DIR__ . "/classes/vendeur.php";
require __DIR__ . "/classes/fournisseur.php";
require __DIR__ . "/includes/afficherMembre.php";


if ($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(405);
    die();
}
$role = $_POST["role"];
$nom = $_POST["nom"];
$mail = $_POST["mail"];
$mdp = $_POST["mdp"];
$adresse = $_POST["adresse"];

if ($role == "Vendeur" || $role == "Fournisseur") {
    $statut = $_POST["statut"];
    $siret = $_POST["siret"];
    $ca = $_POST["ca"];
}

if ($role == "Fournisseur") {
    $agrement = $_POST["agrement"];
}


if ($role == "Client") {
    $membre = new Client($nom, $mail, $mdp, $adresse);
} else if ($role == "Vendeur") {
    $membre = new Vendeur($nom, $mail, $mdp, $adresse, $statut, $siret, $ca);
} else if ($role == "Fournisseur") {
    $membre = new Fournisseur($nom, $mail, $mdp, $adresse, $statut, $siret, $ca, $agrement);
} else {
    $membre = null;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Récapitulatif</title>
</head>

<body>
    <?php if ($membre == null) { ?>
        <p> Erreur lors de l'inscription </p>
    <?php } else {
        afficherMembre($role, $membre);
    } ?>
</body>

</html>