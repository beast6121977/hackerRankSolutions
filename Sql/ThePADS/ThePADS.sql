SELECT CONCAT(name,'(', left(occupation, 1), ')') AS concatname
FROM occupations
ORDER BY concatname;

SELECT CONCAT('There are a total of ', COUNT(occupation),' ', LOWER(occupation),'s.')
FROM occupations
GROUP BY occupation
ORDER BY COUNT(occupation), occupation;