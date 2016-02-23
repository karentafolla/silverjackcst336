<?php
    //Declare index arrays
    // $family = ["Jose", "Maria"];
    // $kids = array();
    
    // //to add to array
    // $kids[] = "Jose";
    // array_push($kids, "Hector");
    
    // //to insert to array
    // array_splice($kids, 0, 0, "Karen");
    
    // //number of items in array
    // $numberOfKids = count($kids);
    
    
    // //looping through array
    // for ($f = 0; $f < $numberOfKids; $f++) {
    //     array_push($family, $kids[$f]);
    // }
    
    
    //print array
    //var_dump($kids);
    //var_dump($family);
 
    
    //Associative arrays    
    $extededFamily = ["uncle" => "john",
                      "aunt" => "kate",
                      "cousin" => "kinsey"];
    
    //use unset to delete
    unset($extededFamily["aunt"]);   
    
    
    //insert into associative array
    $extededFamily["aunt"] = "kate";
     
    //loop through associative array
    // foreach($extededFamily as $member => $name){
    //     echo $member . " : " . $name;
    //     echo "<br/>";
    // } 
    
    $recipe = ["salt" => "2 tsp",
                "pepper" => "1 tsp",
                "ham" => "2 cups"];
    foreach($recipe as $ingredient => $measurement){
        
    }
    
    //var_dump($extededFamily);
    
    //multi-dimensional Arrays
    $family = ["Jose", "Maria", 8];
    $kids = array();
    
    //to add to array
    $kids[] = "Jose";
    array_push($kids, "Hector");
    
    //to insert to array
    array_splice($kids, 0, 0, "Karen");
    
    $family[] = $kids;
    
    echo($family[2][1]);
    
    //var_dump($family);

?>