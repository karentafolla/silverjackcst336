<!DOCTYPE html>


<?php
    // $card = ["imageName" => "",
    //          "score" => "",
    //          "suit" => "",
    //          "rank" => ""];
    // //indexed array         
    // $deck = [];
    
    //assosiative array
    $player1 =["imageName" => "",
              "name" => $_POST["p1"]];
    $player2 =["imageName" => "",
              "name" => $_POST["p2"]];
    $player3 =["imageName" => "",
              "name" => $_POST["p3"]];
    $player4 =["imageName" => "",
              "name" => $_POST["p4"]];
    
    //indexed array
    $table = [$player1, $player2, $player3, $player4];
    
    //var_dump($table);
    
    // //assosiative array
    // $table = ["position1" => $player1,
    //           "position2" => $player2,
    //           "position3" => $player3,
    //           "position4" => $player4];
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
    <?php
        var_dump($table);
    ?>
    <form action="game.php" method="POST">
        <input type="hidden" name="p1" value="<?= $_POST["p1"] ?>"/>
        <input type="hidden" name="p2" value="<?= $_POST["p2"] ?>"/>
        <input type="hidden" name="p3" value="<?= $_POST["p3"] ?>"/>
        <input type="hidden" name="p4" value="<?= $_POST["p4"] ?>"/>
        <input type="submit" value="Play again!"/>
    </form>
    

    </body>
</html>