SELECT 
    lastname AS "Nom de famille",
    COUNT(*) AS "Nombre de membres"
FROM 
    user
GROUP BY 
    lastname
HAVING 
    COUNT(*) > 1;
