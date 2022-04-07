function lonelyinteger(a: number[]): number {
    var temp:number[] = []

    a.forEach(function(value){

        if (typeof temp[value] !== 'undefined')
        {
            temp[value]++
        }
        else{
            temp[value] = 1
        }

    })

    return temp.indexOf(1)

}