SELECT 
    REPLACE(email, '.fr', '.bzh') AS "Meilleurs emails"
FROM 
    user
ORDER BY 
    REPLACE(email, '.fr', '.bzh') DESC;
