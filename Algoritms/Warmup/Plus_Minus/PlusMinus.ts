function plusMinus(arr: number[]): void {
    let count = arr.length
    let positive = 0, negative = 0, zero = 0;

    arr.forEach(function(value){
        if (value > 0) positive++
        else if (value < 0) negative++
        else zero ++
    })

    console.log(positive / count)
    console.log(negative / count)
    console.log(zero / count)
}