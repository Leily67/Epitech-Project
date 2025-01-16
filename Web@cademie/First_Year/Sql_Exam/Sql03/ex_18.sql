SELECT 
    lastname AS "Nom",
    firstname AS "Prenom",
    TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) AS "Age"
FROM 
    user
ORDER BY 
    TIMESTAMPDIFF(YEAR, birthdate, CURDATE()) ASC;
