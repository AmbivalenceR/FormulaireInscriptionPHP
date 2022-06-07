<?php
class Client
{
    /* Propriétés */
    public string $nom; // Nom
    public string $mail; // mail
    public string $password; // Mot de passe
    public string $adresse; // Adresse

    public function __construct(string $nom, string $mail, string $password, string $adresse)
    {
        $this->nom = ucfirst($nom);
        $this->mail = $mail;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->adresse = $adresse;
    }
}
