SELECT 
    movie.title AS "title",
    distributor.name AS "director"
FROM 
    movie
JOIN 
    distributor ON movie.id_distributor = distributor.id
ORDER BY 
    movie.title ASC
LIMIT 
    100;
