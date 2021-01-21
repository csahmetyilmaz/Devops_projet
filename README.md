# Application Laravel de Gestion de ticket

Ce container Docker contient tout ce qui est nécessaire afin d'utiliser la solution.

Composer 1.10 

 - Php 7.4 
 - Node 12 
 - MySQL:5.7 
 - OPS : Docker version 0.6.1 

## Installation

Pour installer la solution les commandes à exécuter sont les suivantes (dans l'ordre indiqué)
 [pip](https://pip.pypa.io/en/stable/) to install foobar.

Cloner le projet :

```bash
git clone https://github.com/johanHamidi/Devops_projet.git
```
Acceder au projet :

```bash
cd Devops_projet/
```
Installation de composer sur docker (si besoin) : 

```bash
docker run -v $(pwd):/app composer install : run composer 
```

Build le Dockerlfile (sudo si besoin) :

```bash
docker-compose build 
```

Lancement de la configuration docker-compose.yml :

```bash
docker-compose up -d
```
 - Si besoin 
 
   ```bash
   docker-compose up
   ```

Vérifier si les conteneurs sont démarrés :
   ```bash
   docker-compose ps -a
   ```

Une fois les conteneurs démarrés, générer la clé SSH du projet pour le conteneur laravel-app :

```bash
docker-compose exec laravel-app php artisan key:generate
```

Executer la commande pour migrer la structure de la database dans mySQL : 

```bash
docker-compose exec laravel-app php artisan migrate
```

Puis executer la commande suivante afin importer les données dans les tables :

```bash
docker-compose exec laravel-app php artisan db:seed
```
  
## Usage

Pour pouvoir lancer l'application, exécuter la commande suivante

```bash
docker-compose exec laravel-app php artisan serve
```

Acceder a votre application depuis un navigateur :

```bash
hhtp://votre_ip:8000 (exemple : http://192.168.1.111:8000)
```

