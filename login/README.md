# Projet d'Authentification Utilisateur

Ce projet propose une interface d'authentification utilisateur avec des formulaires de connexion et d'inscription. Il est basé sur HTML, Tailwind CSS et utilise des fichiers PHP pour le traitement côté serveur. Assurez-vous de suivre les étapes ci-dessous pour configurer et exécuter le projet.

## Structure des Fichiers

### 1. `login`

Dossier principal contenant tous les fichiers nécessaires pour l'authentification.

#### 1.1 `db.php`

Ce fichier est responsable de la connexion à la base de données. Assurez-vous de le configurer correctement avec les informations de votre base de données.

### 2. `index.php`

Fichier principal contenant les formulaires de connexion et d'inscription, ainsi que le code HTML et JavaScript pour la gestion de l'interface utilisateur.

### 3. `signIn.php`

Fichier PHP responsable du traitement côté serveur pour la connexion. Il gère la validation des informations de connexion.

### 4. `signUp.php`

Fichier PHP responsable du traitement côté serveur pour l'inscription. Il gère la validation des informations d'inscription.

## Configuration

1. Assurez-vous d'avoir un serveur web (comme Apache) configuré sur votre machine.

2. Créez une base de données MySQL et importez le schéma à partir du fichier `database-schema.sql` inclus dans le projet.

3. Configurez le fichier `db.php` avec les informations de votre base de données.

4. Lancez votre serveur web et accédez au projet via votre navigateur.

## Utilisation

1. Ouvrez le fichier `index.php` dans votre navigateur.

2. Utilisez les onglets "Login" et "Register" pour basculer entre les formulaires.

3. Remplissez les informations demandées dans les formulaires de connexion et d'inscription.

4. Appuyez sur le bouton "Login" ou "Register" pour soumettre les informations.

5. Le traitement côté serveur (dans `signIn.php` et `signUp.php`) vérifiera les informations et vous redirigera en conséquence.

## Avertissement de Sécurité

Ce projet est destiné à des fins éducatives et démo. Il ne comprend pas toutes les pratiques de sécurité nécessaires pour un déploiement en production. Assurez-vous de mettre en œuvre des mesures de sécurité supplémentaires, telles que la validation des données côté serveur, la protection contre les attaques par force brute, et la gestion sécurisée des mots de passe.

## DeadLine
31/12/2024

---

**Remarque:** Assurez-vous de remplacer toutes les occurrences de `<YOUR_DATABASE_INFO>` dans le fichier `db.php` par vos propres informations de base de données.
