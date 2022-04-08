/*Given an array of integers, find the sum of its elements.*/

function simpleArraySum(ar: number[]): number {
    let sum = 0;
    ar.forEach(function(value){ sum+=value})
    return  sum
}

simpleArraySum([1,2,3,4,5,6,7,8,9])