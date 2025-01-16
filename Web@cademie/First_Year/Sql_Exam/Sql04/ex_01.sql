SELECT count(*) AS "Nombre d'utilisateurs", round(avg(year(now()) - year(birthdate))) AS "Age moyen" FROM user;
