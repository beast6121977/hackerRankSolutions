function countingSort1(arr: number[]): number[] {
    let amount = arr.length,
        result: number[] = []

    result.length = 100
    result.fill(0, 0, result.length)

    for (var i = 0; i < amount; i++) {
        if (typeof result[arr[i]] === 'undefined') {
            result[arr[i]] = 1
        } else {
            result[arr[i]]++;
        }
    }

    return result
}

countingSort1([1, 1, 3, 2, 1, 2, 5, 6])