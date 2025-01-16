SELECT 
    COUNT(*) AS "Nombre de films 'Mystery'"
FROM 
    movie
JOIN 
    movie_genre ON movie.id = movie_genre.id_movie
JOIN 
    genre ON genre.id = movie_genre.id_genre
JOIN 
    distributor ON movie.id_distributor = distributor.id
WHERE 
    genre.name = 'Mystery'
    AND (
        distributor.name IN ('Columbia Pictures', 'Paramount Pictures')
        OR movie.title LIKE 'T%'
    );
