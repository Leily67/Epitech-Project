SELECT 
    g.name AS "Nom du genre", 
    COUNT(*) AS "Nombre de films"
FROM 
    genre g
INNER JOIN 
    movie_genre mg ON mg.id_genre = g.id
INNER JOIN 
    movie m ON mg.id_movie = m.id
GROUP BY 
    g.name
ORDER BY 
    COUNT(*) ASC,
    g.name ASC;
