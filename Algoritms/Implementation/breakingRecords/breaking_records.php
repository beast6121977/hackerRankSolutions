function breakingRecords($scores) {
    $highestRecord = $scores[0];
    $lowestRecord = $scores[0];
    $result = array(0,0);    
    foreach ($scores as $numberGame => $score){
        if ($highestRecord < $score) {
            $highestRecord = $score;
            $result[0]++;
        }
        if ($lowestRecord > $score) {
            $lowestRecord = $score;
            $result[1]++;
        }
    }
    return $result;
}
