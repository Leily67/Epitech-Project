SELECT 
    title AS "Titre du film"
FROM 
    movie
WHERE 
    LEFT(title, 1) BETWEEN 'O' AND 'T'
ORDER BY 
    title DESC;
