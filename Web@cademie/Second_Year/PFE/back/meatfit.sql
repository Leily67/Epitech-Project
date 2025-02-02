CREATE DATABASE meatfit;

use meatfit;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mail VARCHAR(255) NOT NULL,
    password TEXT NOT NULL
);

CREATE TABLE info_users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    age INT NOT NULL,
    weight INT NOT NULL,
    size INT NOT NULL
);

CREATE TABLE food (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE calories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    food_id INT NOT NULL,
    calories INT NOT NULL,
    FOREIGN KEY (food_id) REFERENCES food(id)
);

CREATE TABLE progress (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    calories_consumed INT NOT NULL,
    target_calories INT NOT NULL,
    food_id INT NOT NULL,
    FOREIGN KEY (food_id) REFERENCES food(id)
);