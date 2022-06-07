<?php
class Fournisseur
{
    /* Propriétés */
    public string $nom; // Nom
    public string $mail; // mail
    public string $mdp; // Mot de passe
    public string $adresse; // Adresse
    public string $statut; // Forme juridique
    public int $siret; // SIRET
    public float $ca; // CA
    public int $agrement; // Numéro d'agrément

    public function __construct(string $nom, string $mail, string $mdp, string $adresse, string $statut, int $siret, float $ca, int  $agrement)
    {
        $this->nom = ucfirst($nom);
        $this->mail = $mail;
        $this->mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $this->adresse = $adresse;
        $this->statut = $statut;
        $this->siret = $siret;
        $this->agrement = $agrement;

        if ($ca < 0) {
            $ca = 0;
        }
        $this->ca = $ca;
    }
}
