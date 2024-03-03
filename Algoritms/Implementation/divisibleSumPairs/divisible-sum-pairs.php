function divisibleSumPairs($n, $k, $ar) {
    
    $result = 0;
    for ($i=0; $i<=$n; $i++)
    {
        for ($j=$i+1; $j<=$n; $j++)
        {
            if (isset($ar[$j]))
            {
                $result += (($ar[$i]+$ar[$j])%$k == 0) ? 1 : 0;     
            }
        }
    }
    
    return $result;

}
