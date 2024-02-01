#  Base de données 
## Lignes de commande utilisées


## 1. Env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Exam 
DB_USERNAME=root
DB_PASSWORD=admin
```

### 2. Migrations

```bash
php artisan make:migration create_autoformations_table
php artisan make:migration create_chapitres_table

 
 ```


#### Running Migrations:
```bash
php artisan migrate
```



```php
public function run(): void
{
    Project::create([
        'name' => 'Portfolio',
        'description' => 'Développement d\'un site web mettant en valeur nos compétences.',
    ]);

    Project::create([
        'name' => 'Arbre des compétences',
        'description' => 'Création d\'une application web pour l\'évaluation des compétences.',
    ]);

    Project::create([
        'name' => 'CNMH',
        'description' => 'Création d\'une application web pour la gestion des patients de centre CNMH.',
    ]);
}
```



#### Model
```bash

php artisan make:model Autoformation 
 php artisan make:model Chapitre

```

___

### MLD 
-  Donnez le MLD sous la forme suivant 

  - Autoformation (Id,Titre,Date_de_creation,Date_modification,Référence,description,chapitre_id)
  - chapitre (Id,Titre,ordre,description)
  