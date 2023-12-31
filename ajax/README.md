## README - Tâche jQuery AJAX PHP
==============================

## Objectif de la Tâche
--------------------

L'objectif de cette tâche est d'implémenter une fonctionnalité permettant d'envoyer des messages à un serveur en utilisant jQuery AJAX et PHP. Une fois le message envoyé, il devrait apparaître dans la section des messages sans recharger la page.

## Instructions
------------

1.  Structure HTML :

    -   Vous avez une section principale `<main>` contenant une division `<div>` avec l'identifiant `comment-section`. C'est là que les messages seront affichés.
    -   Un champ de saisie `<input>` avec l'identifiant `comment-input` est également fourni pour que les étudiants puissent entrer leur message.
    -   Un bouton `<button>` intitulé "Send Message" doit être utilisé pour déclencher l'envoi du message.
2.  Ajax et jQuery :

    -   Utilisez jQuery pour gérer les interactions AJAX avec le serveur.
    -   Lorsqu'un utilisateur appuie sur le bouton "Send Message", récupérez le contenu du champ de saisie.
    -   Envoyez ce contenu au serveur via une requête AJAX.
3.  Traitement PHP :

    -   Mettez en place un script PHP pour recevoir la demande AJAX.
    -   Le script PHP doit prendre le message reçu, et l'ajouter à la section des messages dans le code HTML.
    -   Assurez-vous que le script PHP renvoie une réponse appropriée pour être traitée par la fonction de rappel AJAX.
4.  Mise à jour de la Section des Messages :

    -   Après avoir reçu la réponse réussie du serveur, utilisez jQuery pour mettre à jour dynamiquement la section des messages sans recharger la page.
    -   Ajoutez le nouveau message à la section des messages existante.
5.  Style (Optionnel) :

    -   Ajoutez du style CSS pour rendre l'interface plus conviviale si nécessaire.

## Comment Commencer
-----------------

1.  Clonez ce référentiel dans votre environnement de développement.
2.  Ouvrez le fichier HTML dans un navigateur pour voir l'interface utilisateur.
3.  Implémentez le code JavaScript dans la balise `<script>` pour gérer les interactions AJAX.
4.  Créez un fichier PHP pour traiter les demandes AJAX.
5.  Testez en entrant des messages et en vérifiant s'ils apparaissent dans la section des messages.

## Ressources Utiles
-----------------

-   Documentation jQuery AJAX
-   Documentation PHP
https://www.youtube.com/watch?v=pELGoSKnTRs

Bonne chance dans votre implémentation!

## DeadLine
02/01/2024