SELECT 
    CONCAT(UPPER(LEFT(user.lastname, 1)), LOWER(SUBSTRING(user.lastname, 2)), '-', user.firstname) AS "Nom complet"
FROM 
    user
ORDER BY 
    user.birthdate DESC;
