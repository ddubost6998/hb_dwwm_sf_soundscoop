# SoundScoop - Symfony 6

## ℹ️ Informations
- Nom de la base de données : hb_dwwm_sf_soundscoop
- Nom utilisateur : *hb_lucas*
- Mot de passe : ~~C_Pkcx48x95zoCok~~

### 👤 Connexion admin
- Email : *lucas@gmail.com*
- Mot de passe : ~~test~~

## 🎯 Objectifs
Reprendre le projet PHP (SoundScoop) et le refaire en Symfony 6.4

---

## 🏠 Page d'accueil
Création de la page d'accueil avec un nouveau controller ```php bin/console make:controller``` ce qui me permet de créer IndexController dans 📁 src > Controller > IndexController.php . Dans le même temps cela créer un nouveau template index.html.twig .
Ensuite je créer la navbar dans Twig avec ```nav.html.twig``` .

## 🗄️ Base de données
Création de ma base de données et inclusions des tables en créant des Entités pour chaque table. Ajout des relations OneToMany / ManyToMany .

## 🗄️ Fixtures
Je créer mes fixtures ce qui me permet d'avoir des données de test. J'utilise Faker pour l'insertion de données fake.

## 🌐 EasyAdmin / CRUD
Utilisation de EasyAdmin pour la réalisation du CRUD pour les administrateurs sur l'entité Article.
