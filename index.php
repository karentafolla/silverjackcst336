<!DOCTYPE html>


<?php
    $card = ["imageName" => "",
             "score" => "",
             "suit" => "",
             "rank" => ""];
    //indexed array         
    $deck = [];
    
    //assosiative array
    $player1 =["imageName" => "",
              "name" => ""];
    
    //indexed array
    // $table = [$player1, $player2, $player3, $player4];
    
    //assosiative array
    $table = ["position1" => $player1,
              "position2" => $player2,
              "position3" => $player3,
              "position4" => $player4];
    $hand = ["player" => null,
             "cards" => [], //indexed array of cards
             "score" => ""]; 
    
    $game = ["location", $table, 
             "hands", []];
?>
    
<html>
    <head>
        <title> </title>
    </head>
    <body>
    
    

    </body>
</html>