SELECT 
    distributor.name AS "Nom du distributeur",
    SUM(movie.duration) AS "Duree totale"
FROM 
    distributor
JOIN 
    movie ON distributor.id = movie.id_distributor
GROUP BY 
    distributor.name
ORDER BY 
    distributor.name ASC;
