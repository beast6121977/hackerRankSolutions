function kangaroo(x1: number, v1: number, x2: number, v2: number): string {

    if ((x2 > x1) && (v2 >= v1)) {
        return 'NO'
    } else if  ((x1 > x2) && (v1 >= v2)) {
        return 'NO'
    }
    else
    {
        let jumps = ((x2 - x1) / (v2 - v1))

        return (jumps%1 === 0)?'YES':'NO'
    }
}