SELECT 
    MIN(duration) AS "Duree du film le plus court"
FROM 
    movie
WHERE 
    duration IS NOT NULL AND duration > 0;
