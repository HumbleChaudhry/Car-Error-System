CREATE PROCEDURE `get_all_accounts` ()
BEGIN
SELECT a.id AND a.email FROM account AS a;
END