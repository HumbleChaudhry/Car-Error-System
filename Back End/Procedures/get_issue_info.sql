CREATE PROCEDURE `get_issue_info`(IN `_issue` varchar(50))

BEGIN
SELECT * FROM issue AS i
WHERE i.issue_name = _issue;

SELECT g.title FROM guide AS g
WHERE g.issue_name = _issue;

SELECT h.code FROM has AS h
WHERE h.name = _issue;

END
