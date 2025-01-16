SELECT 
    title AS "Titre des 12 derniers films"
FROM 
    movie
ORDER BY 
    id DESC
LIMIT 
    12;
