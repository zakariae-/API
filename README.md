# Symfony Demo API

The "API Platform Demo Application" is a reference application created to show how to develop Symfony/API PLATFORM 
applications following the recommended best practices.

## Domain-Driven Design (DDD) 

Pour mettre en place une architecture DDD, il faut séparer le code dans les couche suivante.

### Couche Interface

La couche Interface va contenir le nécessaire pour interagir avec le reste du monde.

### Couche Application

La couche Application centralise le processus métier du domaine en fonction des cas d'utilisation.

### Couche Domain

La couche Domain es le cœur de votre application "logiciel" et contient la logique du Domaine.

### Infrastructure

L'infrastructure prends en charge prends en charge le stockage de données ou l'accès à la base de données est une 
fonctionnalité réservée à cette couche .
