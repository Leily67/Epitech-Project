SELECT 
    zipcode AS "Code postaux"
FROM 
    user
GROUP BY 
    zipcode
HAVING 
    COUNT(*) > 1
ORDER BY 
    zipcode ASC;
