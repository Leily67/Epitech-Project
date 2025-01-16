SELECT 
    CASE 
        WHEN CHAR_LENGTH(movie.title) > 10 
        THEN CONCAT(LEFT(movie.title, 7), '...') 
        ELSE LEFT(movie.title, 10) 
    END AS "Titre . . . "
FROM 
    movie
WHERE 
    movie.id % 2 = 1
    AND movie.id > 42
    AND movie.id < 84;
