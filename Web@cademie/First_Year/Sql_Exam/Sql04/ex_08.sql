SELECT 
    name AS "Nom du genre"
FROM 
    genre
WHERE 
    id NOT BETWEEN 6 AND 12
ORDER BY 
    name ASC;
