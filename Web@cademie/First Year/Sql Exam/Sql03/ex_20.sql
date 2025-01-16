SELECT 
    CONCAT(
        UPPER(LEFT(firstname, 1)), LOWER(SUBSTRING(firstname, 2)), ' ',
        UPPER(lastname)
    ) AS "Prenom NOM"
FROM 
    user
WHERE 
    DAY(birthdate) < 5;
