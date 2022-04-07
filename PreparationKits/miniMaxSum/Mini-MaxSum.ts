function miniMaxSum(arr: number[]): void {

    let minValue = arr[0], maxValue = arr[0], sum = 0;

    arr.forEach(function(value){
        minValue = (minValue > value)?value:minValue
        maxValue = (maxValue < value)?value:maxValue
        sum += value
    });

    console.log( (sum - maxValue) + ' ' + (sum - minValue))


}