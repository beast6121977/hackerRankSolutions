function fizzBuzz(n: number): void {
    for (var i = 1; i <= n; i++)
    {
        if ((i%3 > 0) && (i%5 > 0))
        {
            console.log(i)
        }
        else
        {
            let result = '';
            if (i%3 == 0 ) result = result + 'Fizz'
            if (i%5 == 0 ) result = result + 'Buzz'

            console.log(result);
        }
    }
}