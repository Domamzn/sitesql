login.sql
SELECT * FROM utilisateurs 
WHERE login = :login 
AND mot_de_passe = SHA2(:mot_de_passe, 256);