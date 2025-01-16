SELECT 
    COUNT(*) AS 'Nombre de films commencant par "Mo"'
FROM 
    movie
WHERE 
    movie.title LIKE BINARY 'Mo%';
