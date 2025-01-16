SELECT 
    movie.title AS "Titre du film",
    distributor.name AS "Nom du distributeur"
FROM 
    movie
JOIN 
    distributor ON movie.id_distributor = distributor.id
WHERE 
    movie.id IN (21, 87, 263, 413);
