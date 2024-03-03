function migratoryBirds($arr) {
    
    $result = [];
    
    foreach ($arr as $bird_id)
    {
        if (isset($result[$bird_id])){
            $result[$bird_id] += 1;
        }
        else
        {
            $result[$bird_id] = 1;
        }
    }
    
    arsort($result);
    
    $first = array_key_first($result);
    $first_value = $result[$first];
    unset($result[$first]);
    
    
    foreach ($result as $bird_id => $amount)
    {
        if ($amount == $first_value && $bird_id < $first)
        {
            
            print_r($bird_id);
            
            $first = $bird_id;
        } else {
            break;
        }
    }
    
    return $first;
    

}
