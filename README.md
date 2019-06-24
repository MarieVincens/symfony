Symfony

Installation


composer create-project symfony/skeleton symfony
OU

composer create-project symfony/website-skeleton symfony

Activer le plugin Symfony dans PHPStorm

# Symfony

Pour installer le projet :

1. Créer le fichier .env.local
2. Importer les dépendances PHP :
    ```shell
    composer install
    ```
3. Créer la base de données et insérer les données de test :
    ```shell
    php bin/console doctrine:database:drop --force
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```
4. Démarrer le serveur PHP (optionel) :
    ```shell
    php bin/console server:run
    ```

## Installation

```shell
composer create-project symfony/skeleton symfony
```

OU

```shell
composer create-project symfony/website-skeleton symfony
```

Activer le plugin Symfony dans PHPStorm

### Vérifier les pré-requis

```shell
composer require requirements-checker
```

Vérifier si tout est OK sur l'URL public/check.php

```shell
composer remove requirements-checker
```

### Installer le serveur interne de PHP

Optionnel, pour ne pas utiliser Apache et avoir des URLs plus courtes.

```shell
composer require symfony/web-server-bundle --dev
```

Pour démarrer le serveur

```shell
php bin/console server:run
```

OU

```shell
php bin/console server:start
php bin/console server:stop
```

### Installer Maker Bundle

```shell
composer require maker --dev
```

## Doctrine

```shell
composer require orm
```

Créer un fichier .env.local et ajouter une ligne pour la variable d'environemment `DATABASE_URL`

Créer la base de données (vide) :

```shell
php bin/console doctrine:database:create
```

Pour la supprimer :

```shell
php bin/console doctrine:database:drop --force
```

## Création des Entités

Créer une entité Doctrine avec Maker :

```shell
php bin/console make:entity EntityName
```

Créer le fichier de migration :

```shell
php bin/console make:migration
```

Exécuter le/les fichier(s) de migration :

```shell
php bin/console doctrine:migrations:migrate
```

## Création des fixtures (données de test)

Installation du bundle :

```shell
composer require --dev orm-fixtures
```

Création d'un fichier de Fixtures :

```shell
php bin/console make:fixtures
```

Exécuter les fichiers de Fixtures :

```shell
php bin/console doctrine:fixtures:load
```