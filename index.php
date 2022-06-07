<?php
$role = null;
if (isset($_GET["role"])) {
    $role = $_GET["role"];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>

<body>
    <?php if ($role == null) { ?>
        <form action="index.php" method="GET">
            <select name="role">
                <option value="Client">Client</option>
                <option value="Vendeur">Vendeur</option>
                <option value="Fournisseur">Fournisseur</option>
            </select>
            <br><br>
            <input type="submit" value="Enregistrer">
        </form>
    <?php } ?>
    <?php if ($role != null) { ?>
        <form action="recapitulatif.php" method="POST">
            <input type="text" name="nom" placeholder="Nom"><br><br>
            <input type="email" name="mail" placeholder="Email"><br><br>
            <input type="password" name="mdp" placeholder="Mot de passe"><br><br>
            <input type="text" name="adresse" placeholder="Adresse"><br><br>
            <?php if ($role == "Vendeur" || $role == "Fournisseur") { ?>
                <input type="text" name="statut" placeholder="Statut juridique"><br><br>
                <input type="number" name="siret" placeholder="Numéro SIRET"><br><br>
                <input type="number" name="ca" placeholder="Chiffre d'affaire"><br><br>
            <?php };
            if ($role == "Fournisseur") { ?>
                <input type="number" name="agrement" placeholder="Numéro d'agrément"><br><br>
            <?php } ?>
            <input type="hidden" name="role" value="<?= $role ?>" />
            <input type="submit" value="Enregistrer">
        </form>
    <?php }; ?>
</body>

</html>