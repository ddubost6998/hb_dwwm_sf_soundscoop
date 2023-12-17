# SoundScoop - Symfony 6

## ℹ️ Informations
- **Nom de la base de données :** `hb_dwwm_sf_soundscoop`
- **Nom d'utilisateur :** *hb_lucas*
- **Mot de passe :** ~~C_Pkcx48x95zoCok~~

### 👤 Connexion admin
- **Email :** *lucas@gmail.com*
- **Mot de passe :** ~~test~~

## 🎯 Objectifs
Reprendre le projet PHP (SoundScoop) et le migrer vers Symfony 6.4.

---

## 🏠 Page d'accueil
Création de la page d'accueil avec un nouveau contrôleur `php bin/console make:controller`, permettant de générer le fichier `IndexController.php` dans le répertoire 📁 `src > Controller > IndexController.php`. Dans le même temps, cela crée un nouveau template `index.html.twig`. Ensuite, création de la navbar en utilisant le fichier Twig `nav.html.twig`.

Récupération des données des articles, artistes, catégories et styles dans ma page d'accueil dans le contrôleur `IndexController.php`. Cela me permet d'afficher les 3 derniers articles insérés par l'administrateur dans mon template `index/index.html.twig`.

## 🗄️ Base de données
Création de ma base de données et inclusion des tables en créant des Entités pour chaque table. Ajout des relations OneToMany / ManyToMany.

## 🗄️ Fixtures
Création de mes fixtures me permettant d'avoir des données de test. J'utilise Faker pour l'insertion de données fictives.

## 🌐 EasyAdmin / CRUD
Utilisation de EasyAdmin pour la réalisation du CRUD destiné aux administrateurs sur l'entité Article. Configuration de mes entités dans le fichier `easy_admin.yaml`. Ces configurations définissent comment EasyAdminBundle doit afficher les entités dans l'interface d'administration.

## 🔐 Sécurité
Connexion de l'administrateur pour accéder à EasyAdmin. Cela est réalisé dans le `DashboardController.php` en utilisant le rôle `admin` assigné à l'utilisateur connecté.

---

## 🤯 Mes difficultés
Chargement de mes Fixtures pour insérer mes données d'articles, de catégories, d'utilisateurs et de styles. J'ai essayé avec Symfony 5.4 et 6.4, mis à jour PHP vers la version 8.3, réinstallé libsodium avec Homebrew, mais aucune modification n'a été constatée.
