
# TP3 - Formulaires Symfony 2025/2026

# Description du projet
Implémentation d'une page produit avec formulaire d'ajout au panier en Symfony, respectant les bonnes pratiques et le principe de responsabilité unique.

 # Objectifs atteints
 Transformation du HTML fourni en application Symfony
 Utilisation des Form Types Symfony
 Intégration de Bootstrap 5.3
 Respect des bonnes pratiques Symfony
 Architecture propre et maintenable

 # Implémentation
1. Entité Product
Création d'une classe Product contenant toutes les informations du produit :
Nom, prix, description
Caractéristiques techniques (marque, couleur, connectivité, autonomie)
URL de l'image
Méthodes getters pour l'affichage

2. Form Type
Création de ProductFormType avec :
Champ quantité : Type NumberType avec validation (1-10)
Champ couleur : Type ChoiceType avec les options fournies
Bouton submit : Style Bootstrap
Attributs HTML : Classes et styles conformes au design

3. Contrôleur
ProductController gère :
Affichage de la page produit (/ et /product)
Traitement du formulaire POST
Messages flash pour confirmation
Redirection POST-REDIRECT-GET

4. Templates Twig
base.html.twig : Structure HTML avec intégration Bootstrap
product/index.html.twig : Rendu du formulaire avec les données produit
Utilisation des fonctions form_start(), form_widget(), form_end()

# Personnalisations
Intégration Bootstrap
Lien CDN Bootstrap dans le template de base
Classes Bootstrap appliquées aux éléments du formulaire
Design responsive avec système de grille

Validation
Contraintes sur la quantité (1 à 10)

Protection CSRF activée

Messages d'erreur intégrés

UX/UI
Messages flash pour confirmation d'ajout au panier

Interface fidèle à la maquette fournie

Formulaire ergonomique et accessible

# Bonnes pratiques respectées
1. Single Responsibility Principle
Product : Représente uniquement les données du produit
ProductFormType : Configure uniquement le formulaire
ProductController : Gère uniquement la logique HTTP

2. Séparation des préoccupations
Templates : Vue (présentation)
Contrôleur : Contrôle (logique)
Entité/Form : Modèle (données)

3. Sécurité
Protection CSRF
Validation des données
Échappement des sorties (Twig)

4. Performance
Cache Symfony activé
Assets externes (Bootstrap via CDN)
Code optimisé et minimaliste

# Résolution des problèmes
Problèmes rencontrés

Erreur de template : Correction du chemin index.html.twig vs index.html_twig
Routes non trouvées : Configuration des routes dans config/routes/web.yaml
Intégration Bootstrap : Ajout du CDN dans le template de base

Solutions apportées

Vérification systématique des chemins et noms de fichiers
Configuration explicite des routes
Tests réguliers après chaque modification
