Projet programmation web
========================

L'objectif de ce projet est de créer un site e-commerce en Html, CSS. Peu importe le type de produits vendu, le site doit être fonctionnel en terme de navigation, affichage. Il sera composé d'une dizaine de pages. Le style visuel du site n'est pas imposé mais sera pris en considération dans la note finale.

Le site doit être composé en deux parties :

- Une première visible pour les clients de la boutique.
- La deuxième partie sera réservée à un administrateur, gestionnaire du site pour la gestion des commandes, utilisateurs, etc.

## Parties communes sur les pages

Chaque page doit comporter plusieurs parties communes avec les autres pages web :

**header** 

Le **header** étant le premier élément visible du site, il devrait contenir le nom du site avec une image de fond mettant en scène le type de produit vendu. Par exemple, un personnage de bande dessiné si le site vends des livres, un clavier si les périphériques de PC sont la marchandise du site. 

**Menu**

Un **menu** sera accessible directement sous le header pour lister un ensemble de catégories de produits présent sur le site. Chacune de ces catégories doit être un lien fonctionnel dirigeant l'utilisateur vers une page de listing de produits. En plus des liens vers les catégories, le menu contiendra un lien sous forme d'image redirigeant l'utilisateur vers la homepage du site. 

**Footer**

Le footer sera divisé en trois colonnes de taille égale. Dans la première colonne se trouveront les différentes catégories de produits. Cette fois ci, les liens seront présentes sous forme de liste à puces. Dans la deuxième colonne se trouveront les liens vers les documents légaux du site web ainsi que les liens habituels du site e-commerce: CGU, mentions légales, Garanties, FAQ, plan du site, etc. Votre nom et votre prénom seront visibles dans la deuxième colonne. Dans la troisième colonne sera visible un mini formulaire de contact. Ce formulaire comprendra deux informations : une adresse email ainsi qu'un message. 

## Liste des pages publiques

- Page de détail d'un produit
- Page d'inscription pour les nouveaux utilisateurs
- Page de connexion pour les utilisateurs disposant déjà d'un compte
- Page de visualisation d'un panier
- Page de recherche (avec résultat en ligne)

## Détail des pages publiques

### Page d'accueil avec plusieurs produits affichés en grille

Cette page liste sous forme de grille les différents produits du site e-commerce. Elle doit afficher au moins 10 produits. Les informations affichées pour chaque produit :

- une petite image de format carré
- le nom du produit
- le prix

En cliquant sur le nom du produit, l'utilisateur doit être redirigé vers la page de consultation d'un produit.

### Page de détail d'un produit

Sur cette page, on peut consulter les informations détaillées du produit. Il faut donc afficher pour un produit, 4 photos dont une en plus grand format, un titre, une description, un prix unitaire et un bouton ajouter au panier avec un champs permettant de sélectionner la quantité de produit. 

Pour un produit, il existera plusieurs variantes. En dessous du nom du produit, il faudra afficher une liste déroulante permettant de choisir une variante du produit. Il peut s'agir d'une couleur, d'une taille, d'une déclinaison technique ou autre.

Au dessus de l'image en haut à gauche, il faudra afficher sous forme de fil d'ariane, le classement du produit dans les catégories. Par exemple : 

```
> Electro > Téléviseurs > 55 pouces et plus
```

Chacune de ses catégories doit être cliquable et diriger l'utilisateur vers la page de listing des produits. 

### Page d'inscription

Sur la page d'inscription, l'utilisateur doit renseigner un ensemble d'informations afin de pouvoir s'inscrire :

- Nom et prénom, 
- Adresse, 
- Date de naissance, 
- Adresse e-mail, 
- Mot de passe (avec confirmation), 
- Le sexe (homme ou femme), 
- Le pays de résidence, 
- L'acceptation des CGU (via une case à cocher)

Chacun de ces champs étant obligatoire, ils devront être marqués d'une étoile rouge après le label. 

En appuyant sur le bouton d'inscription, l'utilisateur est redirigé vers le même formulaire mettant en avant un problème lors de la saisie. Le champ email sera rouge et un message d'erreur sera affiché au dessus du champs en question pour indiquer un problème de saisie. 


### Page de connexion

Afin d'authentifier un utilisateur, il faudra qu'il renseigne une adresse email ainsi qu'un mot de passe. A la soumission du formulaire, l'utilisateur est redirigé vers la page d'accueil du gestionnaire du site. 

Sous le formulaire de connexion, il faudra ajouter un lien pour rediriger l'utilisateur vers la page d'inscription, si il n'a pas encore de compte.


### Panier

La page de panier affichera une liste de produits. Pour chacun de ses produits doivent être visibles :

- une vignette représentant le produit, (de format carré)
- la désignation du produit 
- la quantité sélectionnée
- le prix unitaire
- le prix total 

En plus des informations par produit, il faut afficher le prix total de la commande. Cette page comporte également un bouton pour valider la commande. En cliquant sur ce bouton, l'utilisateur est redirigé vers la page de confirmation de commande. 

### Page de confirmation de commande

Cette page est très simple. Elle se contente d'afficher un message pour l'utilisateur indiquant que sa commande a bien été prise en compte. Elle comporte également un lien vers la page d'accueil du site. 

### Page de recherche

Le leader comporte un champ de recherche qui permets de rechercher des produits sur le site. En soumettant le formulaire, l'utilisateur arrive sur une page qui liste les produits correspondant à la recherche. Pour chaque produit, les informations suivantes doivent être visible : 

- miniature du produit, 
- nom du produit, 
- description, 
- un bouton "Ajouter au panier"

Le nom du produit doit être un lien vers la page de détail du produit. Le bouton redirige vers la page de panier. Comme les résultats de recherche sont nombreux, le site comporte un système de pagination. Au dessus de la liste de produits, je dois voir une zone de pagination. Cette zone comporte plusieurs liens :

- Page précédente, 
- Page suivante,
- Une zone de saisie texte pour indiquer la page à afficher

Cette même zone devra être visible sous la liste de produits.


## Détail des pages de gestion

*Pour cette partie, le besoin sera décrit par besoin fonctionnel et non par écran spécifiquement. La partie gestion devra répondre à toutes les fonctionnalités exprimées ci-dessous.*

La partie administrative devra permettre à un gestionnaire de faire vivre le site entièrement. Il doit pouvoir gérer les différents produits de son site. Un produit est défini par plusieurs informations :

- un titre
- une description
- un prix en euros
- 4 images
- une catégorie

Il faut pouvoir ajouter/modifier/supprimer un produit. A chaque produit est rattaché une catégorie. Or je dois également pouvoir modifier une catégorie. Pour catégorie est définie simplement par son nom. Je dois pouvoir lister les produits qui appartiennent à une catégorie ainsi que voir le nombre de produits rattachés à chaque catégorie. 

Le gestionnaire s'intéresse également aux commandes passés sur son site. Il doit pouvoir lister les commandes passés en les filtrant par statut : en cours, expédiés, livrés. Il pourra consulter le détail de chaque commande : aussi bien les informations du client que les produits commandés et leur quantité. 

## Bonus 

Un bonus sera accordé à la réalisation d'un tableau de bord récapitulant les différentes informations qui vous paraissent pertinentes pour un site e-commerce. (Commandes sur une période, nombre de produits, produits les plus vendus, etc)

Un bonus sera également accordé à l'esthétique du site. 


