SELECT 
    DISTINCT REVERSE(city) AS "Nom de ville inverse"
FROM 
    user
ORDER BY 
    REVERSE(city) DESC;
