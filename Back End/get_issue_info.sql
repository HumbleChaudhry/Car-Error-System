CREATE DEFINER=`root`@`localhost` PROCEDURE `get_issue_info`(IN `_issue` varchar(50))
BEGIN

SELECT I.*, H.code, G.title  FROM issue AS I, has AS H, guide AS G
WHERE I.issue_name = _issue AND H.name = _issue AND G.issue_name = _issue;

END