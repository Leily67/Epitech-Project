SELECT 
    MD5(LEFT(movie.title, 5)) AS "Titre MD5",
    movie.id AS "ID",
    UPPER(genre.name) AS "GENRE"
FROM 
    movie
JOIN 
    movie_genre ON movie.id = movie_genre.id_movie
JOIN 
    genre ON movie_genre.id_genre = genre.id
WHERE 
    movie.title LIKE '%ball%'
    AND movie.id % 2 = 0;
