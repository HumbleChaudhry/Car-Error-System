CREATE PROCEDURE `delete_account` (IN _id)

BEGIN  
DELETE FROM account  
WHERE  id = _id  
END  