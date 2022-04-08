/*You are in charge of the cake for a child's birthday.
You have decided the cake will have one candle for each year of their total age.
They will only be able to blow out the tallest of the candles.
Count how many candles are tallest.*/

function birthdayCakeCandles(candles: number[]): number {

    let result: number[] = [], maxCandle = 0

    candles.forEach(function (value) {
        maxCandle = (value > maxCandle) ? value : maxCandle

        if (typeof result[value] === 'undefined') {
            result[value] = 1
        } else {
            result[value]++;
        }
    })

    return result[maxCandle];
}

console.log(birthdayCakeCandles([4, 4, 2, 1, 3, 4]))