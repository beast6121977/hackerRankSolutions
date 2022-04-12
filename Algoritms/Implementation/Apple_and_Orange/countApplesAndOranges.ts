function countApplesAndOranges(s: number, t: number, a: number, b: number, apples: number[], oranges: number[]): void {

    var amountApple: number = 0, amountOrange: number = 0
    apples.forEach(function (apple) {
        amountApple += (((apple + a) >= s) && ((apple + a) <= t) ) ? 1 : 0
    })

    oranges.forEach(function (orange) {
        amountOrange += (((orange + b) <= t) && ((orange + b) >= s) ) ? 1 : 0
    })

    console.log(amountApple)
    console.log(amountOrange)
}