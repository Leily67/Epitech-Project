
# CRUD GENERATOR

The goal of the project is to review a basic notion of the web developer's job: the CRUD in MVC design.

My CRUD generator simulates the behaviour of **php bin/console generate:doctrine:crud** of Symfony

## Tech Stack & Notion

- PHP
- POO
- CRUD
- MVC

## Documentation

- **Step 1:** Generation of the entity and its model
- **Step 2:** Generation of the entity's read views
- **Step 3 & 4:** Generation of the entity's write views

### Step 01 - entity

Create a PHP CLI script named crud_generator. This script should ask the user for the name of the entity to create and then offer the user to create fields in that entity.

### Step 02 - View register

Continue your crud_generator script by adding the ability to generate show (displaying a record whose id is provided) and list (displaying all records) views of your entity.

### Step 03 - Create register

Continue your crud_generator script by adding the ability to generate the new view (adding a database record).

### Step 04 - Edit register

Continue your crud_generator script by adding the ability to generate the edit view (modification of a database record whose id is provided).


## Execution

To execute this project run

```bash
  ./crud_generator -g entity $DB_NAME # to generate an entity
  ./crud_generator -g crub $ENTITY_NAME # to generate a crud
```

## Authors

- [Colette OSWALD](https://www.github.com/leily67)

## License

[MIT](https://choosealicense.com/licenses/mit/)
