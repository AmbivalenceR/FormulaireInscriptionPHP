<?php

/* Affichage du récapitulatif de l'inscription */
function afficherMembre(string $role, Client|Vendeur|Fournisseur $membre)
{ ?>
    <p> Inscription effectuée </p><br><br>
    <p>Nom : <?= $membre->nom ?></p>
    <p>Mail : <?= $membre->mail ?></p>
    <p>Mot de passe : <?= $membre->mdp ?></p>
    <p>Adresse : <?= $membre->adresse ?></p>
    <?php if ($role == "Vendeur" || $role == "Fournisseur") { ?>
        <p>Statut juridique : <?= $membre->statut ?></p>
        <p>SIRET : <?= $membre->siret ?></p>
        <p>CA : <?= $membre->ca ?></p>
    <?php };
    if ($role == "Fournisseur") { ?>
        <p>Numéro d'agrément : <?= $membre->agrement ?></p>
<?php };
}
