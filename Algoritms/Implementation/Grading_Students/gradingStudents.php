<?php

/**
 * HackerLand University has the following grading policy:
 *
* Every student receives a  in the inclusive range from 0 to 100.
* Any garde less than 40 is a failing grade.
* Sam is a professor at the university and likes to round each student's garde according to these rules:
 *
 * If the difference between the grade and the next multiple of 5 is less than 5, round grade up
 * to the next multiple of 5.
 * If the value of grade is less than 38, no rounding occurs as the result will still be a failing grade.
 *
 * @param $grades
 * @return mixed
 */
function gradingStudents($grades) {
    foreach ($grades as $key => $grade)
    {
        if ($grade >= 38)
        {
            $t_p=ceil($grade/10) * 10;
            $better=($t_p-$grade)>=5?$t_p-5:$t_p;

            if ( $better-$grade < 3 )
                $grades[$key] = $better;
        }
    }

    return $grades;

}