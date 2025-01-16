SELECT 
    movie.title AS "title"
FROM 
    movie
JOIN 
    movie_genre ON movie.id = movie_genre.id_movie
JOIN 
    genre ON movie_genre.id_genre = genre.id
WHERE 
    genre.name IN ('Action', 'Romance')
ORDER BY 
    movie.id ASC;
