SELECT 
    e.company_code, 
    MAX(founder),
    COUNT(DISTINCT lead_manager_code),
    COUNT(DISTINCT senior_manager_code),
    COUNT(DISTINCT manager_code),
    COUNT(DISTINCT employee_code)
FROM Employee e
     LEFT JOIN Company c USING (company_code)
     GROUP BY e.company_code
     ORDER BY e.company_code;
