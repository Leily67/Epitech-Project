select substring(zipcode, 1, 2) as "departement", count(id) as "nombre d'utilisateur" from user group by substring(zipcode, 1, 2) order by substring(zipcode, 1, 2) asc;