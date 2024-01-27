SELECT 
    MAX(IF(occupation = 'Doctor', name, NULL)) as Doctor,
    MAX(IF(occupation = 'Professor', name, NULL)) as Professor,
    MAX(IF(occupation = 'Singer', name, NULL)) as Singer,
    MAX(IF(occupation = 'Actor', name, NULL)) as Actor
FROM (SELECT ROW_NUMBER() OVER (PARTITION BY occupation ORDER BY name) as row_num, name, occupation FROM occupations) as result 
GROUP BY row_num
