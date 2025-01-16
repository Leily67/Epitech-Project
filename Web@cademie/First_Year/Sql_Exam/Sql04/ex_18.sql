SELECT 
    m.title AS "title"
FROM 
    movie m
INNER JOIN 
    movie_genre mg ON m.id = mg.id_movie
INNER JOIN 
    genre g ON mg.id_genre = g.id
WHERE 
    g.name IN ('Action', 'Romance');
