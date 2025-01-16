SELECT 
    genre.name AS "Nom du genre",
    COUNT(movie_genre.id_movie) AS "Nombre de films"
FROM 
    genre
LEFT JOIN 
    movie_genre ON genre.id = movie_genre.id_genre
GROUP BY 
    genre.name
ORDER BY 
    COUNT(movie_genre.id_movie) ASC,
    genre.name DESC;
