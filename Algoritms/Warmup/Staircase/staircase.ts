function staircase(n: number): void {
    let stair:string[] = []

    stair.length = n
    stair.fill(' ', 0, n);

    for (var i = n - 1; i>=0; i--)
    {
        stair[i] = '#';
        console.log(stair.join(''))
    }
}

// console.log(staircase(6))
