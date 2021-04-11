CREATE PROCEDURE `get_issue_info`(IN `_issue` varchar(50))

BEGIN
SELECT * FROM issue 
WHERE issue_name = _issue;

SELECT title FROM guide 
WHERE issue_name = _issue;

SELECT code FROM has 
WHERE name = _issue;

END
