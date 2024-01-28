SELECT 
    n, 
    (CASE
        WHEN p IS NULL THEN 'Root'
        WHEN n IN (SELECT p FROM bst GROUP BY p) THEN 'Inner'
        ELSE 'Leaf'
    END) as place
FROM bst ORDER BY n;
