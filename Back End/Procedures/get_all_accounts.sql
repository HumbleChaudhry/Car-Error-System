CREATE PROCEDURE `get_all_accounts` ()
BEGIN
SELECT id AND email FROM account;
END