SELECT 
    LEFT(title, 5) AS "Titres"
FROM 
    movie
WHERE 
    id BETWEEN 42 AND 84
    AND id % 2 = 0;
