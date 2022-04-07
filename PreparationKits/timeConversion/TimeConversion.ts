function timeConversion(s: string): string {

    var aS = s.split(':'),
        hours = aS[0],
        minutes = aS[1],
        seconds = aS[2].slice(0,-2),
        postM = aS[2].slice(-2)

    if (postM == 'PM')
    {
        hours = (hours !== '12')?(parseInt(hours) +12).toString():hours
    }
    else
    {
        hours = (hours !== '12')?hours:'00'
    }

    return hours + ':' + minutes + ':' + seconds
}