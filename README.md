# exercicePHP

1. Environnement nécessaire :
  Vous aurez besoin d'un serveur web avec PHP, et une base de données :
  • Serveur web : Apache ou Nginx
  • PHP 7 ou 8
  • MySQL, PostgreSQL ou SQLite

2. L'exercice, variante 1
  Je vous propose cet exercice "gestion de clients" en 2 pages :

• Page 1 :
  o Afficher une liste des clients existants, et un bouton "Créer un nouveau client".
  o Au départ, bien sûr, aucun client n'existe dans cette liste, alors cette liste affichera "Aucun client".
  o Dans cette page/liste, on peut :
  ▪ Cliquer sur le bouton "Créer un nouveau client" de la page 1, et on arrive sur une 2ème page qui contient le formulaire de saisie
  ▪ Cliquer sur un client existant (sur une ligne de la liste quand des clients auront été créés), et on doit pouvoir modifier ses données dans le formulaire de la page 2

• Page 2 :
  o Formulaire de saisie du client avec les champs Nom, Prénom, Adresse (saisie multi-lignes), Téléphone, Date de rendez-vous
  o Bouton Annuler : retour à la page 1 Liste,
  o Bouton Enregistrer : créer ou modifier le client et retour à la page 1
  o Bouton Supprimer : demande de confirmation avant suppression, puis suppression
  o Tous les champs du formulaire sont obligatoires et la date de rendez-vous doit être dans le futur.
  • A chaque client créé, associer un ID interne et une date de création, et ces 2 infos seront affichées dans la liste des clients de la page 1, en plus des autres champs.
  Pour coder ça, vous utiliserez HTML/CSS/PHP/SQL, en mode natif, sans framework (Laravel, Symphony, React, jQuery...). Un peu de javascript peut être utile pour ajouter un DatePicker, ou formater le numéro de téléphone.
  Les données seront stockées dans une base MySQL ou SQLite.

3. Variante 2
  Coder le même sujet, avec une seule page visible : la création/modification d'un client au travers du formulaire doit se faire par affichage d'un <div> "popup" contenant ce formulaire, en avant-plan de la liste, sans recourir à une 2ème page (c'est-à-dire sans que l'url visible du navigateur ne change), et sans rafraichissement de l'ensemble de la page.
  Cette gestion nécessite de savoir écrire en javascript des requêtes au serveur, dites "ajax" ou "XMLHttpRequest" (XHR). Ces requêtes peuvent être écrites en js natif, ou via une lib js comme jQuery (méthodes $.get(), $.post() ou $.ajax() ).
