function diagonalDifference(arr: number[][]): number {
    let len = arr.length,
        sum = 0,
        nSum = 0

    for (let n = 0; n < len; n++)
    {
        sum+= arr[n][n]
        nSum += arr[n][len - n -1]
    }

    return Math.abs(sum - nSum);
}