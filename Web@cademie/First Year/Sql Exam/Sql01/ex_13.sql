SELECT 
    COUNT(*) AS "Nombre de films jamais diffuses"
FROM 
    movie
LEFT JOIN 
    movie_schedule ON movie.id = movie_schedule.id_movie
WHERE 
    movie_schedule.id_movie IS NULL;
