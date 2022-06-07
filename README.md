# FormulaireInscriptionPHP

Le but de cet exercice est de plusieurs formulaires d'inscription permettant à des utilisateurs de s'inscrire avec l'un des rôles suivants: client, vendeur et fournisseur.

Chaque type d'utilisateur sera représenté par une classe.

Tous les utilisateurs devront avoir les propriétés suivantes: nom, email, mot de passe et adresse postale.

Les utilisateurs vendeurs et fournisseurs devront également présenter les propriétés statut juridique (SAS, SARL, etc...), SIRET et chiffre d'affaire.

 Les utilisateurs fournisseurs devront également présenter la propriété numéro d'agrément.

Il faudra instancier un objet utilisateur à partir de la classe correspondant au rôle choisi et à l'aide des informations saisies. Le script devra répondre en affichant un message de confirmation et un récapitulatif des propriétés de l'objet utilisateur instancié.

BONUS: Encryptez le mot de passe avant de l'afficher sur la page.