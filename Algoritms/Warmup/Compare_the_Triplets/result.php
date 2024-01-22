function compareTriplets($a, $b) {
    $points = array(0, 0);
    $count = count($a);
    
    for ($i=0; $i<$count; $i++)
    {
        if ($a[$i] == $b[$i]) { continue; } elseif ($a[$i] > $b[$i]) {
            $points[0]++;
        } else {
            $points[1]++;
        }
    }
    
    return $points;    
}
