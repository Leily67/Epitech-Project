SELECT 
    g.name AS "Genre",
    COUNT(mg.id_movie) AS "Nombre de films"
FROM 
    genre g
INNER JOIN 
    movie_genre mg ON g.id = mg.id_genre
GROUP BY 
    g.name
ORDER BY 
    "Nombre de films" DESC;
