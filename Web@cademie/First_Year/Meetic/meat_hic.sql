CREATE DATABASE meat_hic;

USE meat_hic;

CREATE TABLE users ( id INT NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  birthday DATE,
  gender VARCHAR(6),
  city VARCHAR(30),
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  hobbies VARCHAR(100),
  PRIMARY KEY (id)
);
