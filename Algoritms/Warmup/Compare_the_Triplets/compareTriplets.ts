/*Alice and Bob each created one problem for HackerRank.
A reviewer rates the two challenges, awarding points on a scale from 1 to 100 for three categories:
problem clarity, originality, and difficulty.

The task is to find their comparison points by comparing a[0] with b[0], a[1] with b[1], and a[2] with b[2].

If a[i] > b[i], then Alice is awarded 1 point.
If a[i] < b[i], then Bob is awarded 1 point.
If a[i] = b[i], then neither person receives a point.
Comparison points is the total points a person earned.

Given a and b, determine their respective comparison points.

*/

function compareTriplets(a: number[], b: number[]): number[] {
    let result = [0,0];
    for (var i =0; i<a.length; i++)
    {
        if (a[i] > b[i]) result[0]++;
        else if (a[i] < b[i]) result[1]++
    }

    return result

}

compareTriplets([1,2,3],[2,1,3])