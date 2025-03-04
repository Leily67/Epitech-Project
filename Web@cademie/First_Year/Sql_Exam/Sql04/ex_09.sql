SELECT 
    title AS "title",
    duration AS "duration"
FROM 
    movie
ORDER BY 
    LENGTH(title) DESC,
    duration ASC
LIMIT 
    142;