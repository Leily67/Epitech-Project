SELECT 
    movie.title AS "Titre",
    distributor.name AS "Producteur"
FROM 
    movie
JOIN 
    distributor ON movie.id_distributor = distributor.id
ORDER BY 
    movie.title ASC;
