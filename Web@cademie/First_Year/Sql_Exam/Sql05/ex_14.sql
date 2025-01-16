SELECT 
    MD5(LEFT(m.title, 5)) AS "Titre MD5",
    m.id AS "ID",
    UPPER(g.name) AS "GENRE"
FROM 
    movie m
INNER JOIN 
    movie_genre mg ON m.id = mg.id_movie
INNER JOIN 
    genre g ON mg.id_genre = g.id
WHERE 
    m.title LIKE '%ball%'
    AND m.id % 2 = 0;
