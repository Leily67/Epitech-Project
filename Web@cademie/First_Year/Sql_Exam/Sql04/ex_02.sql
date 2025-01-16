SELECT 
    zipcode AS "Codes postaux"
FROM 
    user
GROUP BY 
    zipcode
HAVING 
    COUNT(*) > 1
ORDER BY 
    zipcode ASC;
