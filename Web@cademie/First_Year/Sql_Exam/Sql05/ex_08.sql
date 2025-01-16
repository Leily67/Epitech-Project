SELECT 
    name AS "name"
FROM 
    genre
WHERE 
    id NOT BETWEEN 6 AND 12
ORDER BY 
    name ASC;
