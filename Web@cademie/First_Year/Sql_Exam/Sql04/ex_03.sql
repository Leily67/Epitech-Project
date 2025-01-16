SELECT 
    COUNT(*) AS 'Nombre de films commencant par "Mo"'
FROM 
    movie
WHERE 
    title LIKE BINARY 'Mo%';
