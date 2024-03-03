function birthday($s, $d, $m) {
    
    $n = count($s);
    if ($n == 0 || $n < $m) return 0;
    
    $result = 0;
        
    for ($i = 0; $i <= $n; $i++){
       if (array_sum(array_slice($s, $i, $m)) == $d){
            $result++;       
       }
    }       

      return $result;
}
