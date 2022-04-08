function flippingMatrix(matrix: number[][]): number {

    let size = matrix.length,
        n = size / 2,
        sum = 0
    
    for (var i = 0 ; i < n ; i++)
    {
        for (var j = 0; j<n; j++)
        {
            sum += Math.max(matrix[i][j], matrix[i][size-j-1], matrix[size-i-1][j], matrix[size-i-1][size-j-1])
        }
    }

    return sum;

}