SELECT 
    title AS "Titre",
    duration AS "Durée"
FROM 
    movie
ORDER BY 
    LENGTH(title) DESC,
    duration ASC
LIMIT 
    142;