# Application Laravel de Gestion de ticket

Ce container Docker contient tout ce qui est nécessaire afin d'utiliser la solution.

 - Composer 1.10 
 - Php 7.4 
 - Node 12 
 - MySQL:5.7 
 - OPS : Docker version 0.6.1 

## Installation

Pour installer la solution les commandes à exécuter sont les suivantes (dans l'ordre indiqué).

Cloner le projet :

```bash
git clone https://github.com/johanHamidi/Devops_projet.git
```
Acceder au projet :

```bash
cd Devops_projet/
```
Installation de composer dans l'app du projet : 

```bash
docker run -v $(pwd):/app composer install
```

Build le Dockerlfile (sudo si besoin) :

```bash
docker-compose build 
```

Lancement de la configuration docker-compose.yml :

```bash
docker-compose up -d
```
 - Si besoin de vérifier le détail des lancement des conteneurs, éxecuter la commande suivante puis "Ctrl +C" et relancer la commande ci-dessus :
 
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

Puis éxecuter la commande suivante afin importer les données dans les tables :

```bash
docker-compose exec laravel-app php artisan db:seed
```
  
## Usage

Pour pouvoir lancer l'application, éxecuter la commande suivante :

```bash
docker-compose exec laravel-app php artisan serve --host='laravel-app'
```
  Cette commande vous permet de ne pas avoir à modifier la configuration host par défaut de laravel qui se situe dans la fichier suivant à la fin :
   - sudo vi vendor/laravel/framework/src/Illuminate/Foundation/Console/ServeCommand.php
   
Accéder à votre application depuis un navigateur :

```bash
http://votre_ip:8000 (exemple : http://192.168.1.111:8000)
```
Résultat :
![alt text](https://github.com/johanHamidi/Devops_projet/edit/master/appLaravel.png)

Utilisateur déjà présent pour tester l'application : 
- Admin : 
    - User : admin@support.com
    - Password : root1234
- Utilisateur :
    - User : johnDoe@gmail.com
    - Password : 123456

