SELECT 
    id AS "Identifiant"
FROM 
    movie
WHERE 
    LOWER(title) LIKE '%movie%';
