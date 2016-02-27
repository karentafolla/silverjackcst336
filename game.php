<!DOCTYPE html>

<?php
//arrays holding the card descriptions
//clubs
     $club1= ["imageName" => '<img src="assets/clubs/1.png"/>',
             "score" => "1",
             "suit" => "clubs"];
     $club2= ["imageName" => '<img src="assets/clubs/2.png"/>',
             "score" => "2",
             "suit" => "clubs"];
     $club3= ["imageName" => '<img src="assets/clubs/3.png"/>',
             "score" => "3",
             "suit" => "clubs"];
     $club4= ["imageName" => '<img src="assets/clubs/4.png"/>',
             "score" => "4",
             "suit" => "clubs"];
     $club5= ["imageName" => '<img src="assets/clubs/5.png"/>',
             "score" => "5",
             "suit" => "clubs"];
     $club6= ["imageName" => '<img src="assets/clubs/6.png"/>',
             "score" => "6",
             "suit" => "clubs"];
     $club7 = ["imageName" => '<img src="assets/clubs/7.png"/>',
             "score" => "7",
             "suit" => "clubs"];
    $club8 = ["imageName" => '<img src="assets/clubs/8.png"/>',
             "score" => "8",
             "suit" => "clubs"];
    $club9= ["imageName" => '<img src="assets/clubs/9.png"/>',
             "score" => "3",
             "suit" => "clubs"];
    $club10 = ["imageName" => '<img src="assets/clubs/10.png"/>',
             "score" => "10",
             "suit" => "clubs"];
    $clubjack = ["imageName" => '<img src="assets/clubs/11.png"/>',
             "score" => "11",
             "suit" => "clubs"];
    $clubqueen = ["imageName" => '<img src="assets/clubs/12.png"/>',
             "score" => "12",
             "suit" => "clubs"];
    $clubking = ["imageName" => '<img src="assets/clubs/13.png"/>',
             "score" => "13",
             "suit" => "clubs"];
             
//Diamonds
    $diamonds1=["imageName"=>'<img src="assets/diamonds/1.png"/>',
        "score"=>"1",
        "suit"=>"diamonds"];
    $diamonds2=["imageName"=>'<img src="assets/diamonds/2.png"/>',
        "score"=>"2",
        "suit"=>"diamonds"];
    $diamonds3=["imageName"=>'<img src="assets/diamonds/3.png"/>',
        "score"=>"3",
        "suit"=>"diamonds"];
    $diamonds4=["imageName"=>'<img src="assets/diamonds/4.png"/>',
        "score"=>"4",
        "suit"=>"diamonds"];
    $diamonds5=["imageName"=>'<img src="assets/diamonds/5.png"/>',
        "score"=>"5",
        "suit"=>"diamonds"];
    $diamonds6=["imageName"=>'<img src="assets/diamonds/6.png"/>',
        "score"=>"6",
        "suit"=>"diamonds"];
    $diamonds7=["imageName"=>'<img src="assets/diamonds/7.png"/>',
        "score"=>"7",
        "suit"=>"diamonds"];
    $diamonds8=["imageName"=>'<img src="assets/diamonds/8.png"/>',
        "score"=>"8",
        "suit"=>"diamonds"];
    $diamonds9=["imageName"=>'<img src="assets/diamonds/9.png"/>',
        "score"=>"9",
        "suit"=>"diamonds"];
    $diamonds10=["imageName"=>'<img src="assets/diamonds/10.png"/>',
        "score"=>"10",
        "suit"=>"diamonds"];
    $diamondsJack=["imageName"=>'<img src="assets/diamonds/11.png"/>',
        "score"=>"11",
        "suit"=>"diamonds"];
    $diamondsQueen=["imageName"=>'<img src="assets/diamonds/12.png"/>',
        "score"=>"12",
        "suit"=>"diamonds"];
    $diamondsKing=["imageName"=>'<img src="assets/diamonds/13.png"/>',
        "score"=>"13",
        "suit"=>"diamonds"];
//Hearts
    $hearts1=["imageName"=>'<img src="assets/hearts/1.png"/>',
        "score"=>"1",
        "suit"=>"hearts"];
    $hearts2=["imageName"=>'<img src="assets/hearts/2.png"/>',
        "score"=>"2",
        "suit"=>"hearts"];
    $hearts3=["imageName"=>'<img src="assets/hearts/3.png"/>',
        "score"=>"3",
        "suit"=>"hearts"];
    $hearts4=["imageName"=>'<img src="assets/hearts/4.png"/>',
        "score"=>"4",
        "suit"=>"hearts"];
    $hearts5=["imageName"=>'<img src="assets/hearts/5.png"/>',
        "score"=>"5",
        "suit"=>"hearts"];
    $hearts6=["imageName"=>'<img src="assets/hearts/6.png"/>',
        "score"=>"6",
        "suit"=>"hearts"];
    $hearts7=["imageName"=>'<img src="assets/hearts/7.png"/>',
        "score"=>"7",
        "suit"=>"hearts"];
    $hearts8=["imageName"=>'<img src="assets/hearts/8.png"/>',
        "score"=>"8",
        "suit"=>"hearts"];
    $hearts9=["imageName"=>'<img src="assets/hearts/9.png"/>',
        "score"=>"9",
        "suit"=>"hearts"];
    $hearts10=["imageName"=>'<img src="assets/hearts/10.png"/>',
        "score"=>"10",
        "suit"=>"hearts"];
    $heartsJack=["imageName"=>'<img src="assets/hearts/11.png"/>',
        "score"=>"11",
        "suit"=>"hearts"];
    $heartsQueen=["imageName"=>'<img src="assets/hearts/12.png"/>',
        "score"=>"12",
        "suit"=>"hearts"];
    $heartsKing=["imageName"=>'<img src="assets/hearts/13.png"/>',
        "score"=>"13",
        "suit"=>"hearts"];
        
//Spades
     $spades1=["imageName"=>'<img src="assets/spades/1.png"/>',
        "score"=>"1",
        "suit"=>"Spades"];
     $spades2=["imageName"=>'<img src="assets/spades/2.png"/>',
        "score"=>"2",
        "suit"=>"Spades"];
     $spades3=["imageName"=>'<img src="assets/spades/3.png"/>',
        "score"=>"3",
        "suit"=>"Spades"];
     $spades4=["imageName"=>'<img src="assets/spades/4.png"/>',
        "score"=>"4",
        "suit"=>"Spades"];
     $spades5=["imageName"=>'<img src="assets/spades/5.png"/>',
        "score"=>"5",
        "suit"=>"Spades"];
     $spades6=["imageName"=>'<img src="assets/spades/6.png"/>',
        "score"=>"6",
        "suit"=>"Spades"];
     $spades7=["imageName"=>'<img src="assets/spades/7.png"/>',
        "score"=>"7",
        "suit"=>"Spades"];
     $spades8=["imageName"=>'<img src="assets/spades/8.png"/>',
        "score"=>"8",
        "suit"=>"Spades"];
     $spades9=["imageName"=>'<img src="assets/spades/9.png"/>',
        "score"=>"9",
        "suit"=>"Spades"];
     $spades10=["imageName"=>'<img src="assets/spades/10.png"/>',
        "score"=>"10",
        "suit"=>"Spades"];
     $spadesJack=["imageName"=>'<img src="assets/spades/11.png"/>',
        "score"=>"11",
        "suit"=>"Spades"];
     $spadesQueen=["imageName"=>'<img src="assets/spades/12.png"/>',
        "score"=>"12",
        "suit"=>"Spades"];
     $spadesKing=["imageName"=>'<img src="assets/spades/13.png"/>',
        "score"=>"13",
        "suit"=>"Spades"];

//deck needed for shuffling and dealing
    $deck = [$club1, $club2, $club3, $club4, $club5, $club6, $club7, $club8, $club9, $club10, $clubJack, $clubQueen, $clubKing,
             $diamonds1, $diamonds2, $diamonds3, $diamonds4, $diamonds5, $diamonds6, $diamonds7, $diamonds8, $diamonds9, $diamonds10, $diamondsJack, $diamondsQueen, $diamondsKing,
             $hearts1, $hearts2, $hearts3, $hearts4, $hearts5, $hearts6, $hearts7, $hearts8, $hearts9, $hearts10, $heartsJack, $heartsQueen, $heartsKing,
             $spades1, $spades2, $spades3, $spades4, $spades5, $spades6, $spades7, $spades8, $spades9, $spades10, $spadesJack, $spadesQueen, $spadesKing];
    
//Shuffles the deck of cards
   shuffle($deck);
    
    //assosiative array
    $player1 =["imageName" => '<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRjQzx5YAtUlTxgVGM877ilIQVn3TAXXnfo5a6xWMtrn3NuaIwE8w"/>',
              "name" => $_POST["p1"]];
    $player2 =["imageName" => '<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRareKz7bKsew7N5eVN09FiuadmwfXHbsPQR-29_1SGF7xCSIbn2"/>',
              "name" => $_POST["p2"]];
    $player3 =["imageName" => '<img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT50VSXNJSF69BuMZg6QAkpeWx3UJnkQhqPYyBZACLQQb8yGFgY"/>',
              "name" => $_POST["p3"]];
    $player4 =["imageName" => '<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSQ5qjUw6lRr3QrQFubmuxyndUgrCo6XgWuUiRuyzD0Ddo_ujZODA"/>',
              "name" => $_POST["p4"]];
    
//holds players values
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
        //var_dump($table);
    ?>
    <h1 align="center">Silverjack</h1>
    <form action="game.php" method="POST">
        <input type="hidden" name="p1" value="<?= $_POST["p1"] ?>"/>
        <input type="hidden" name="p2" value="<?= $_POST["p2"] ?>"/>
        <input type="hidden" name="p3" value="<?= $_POST["p3"] ?>"/>
        <input type="hidden" name="p4" value="<?= $_POST["p4"] ?>"/>
        <input type="submit" value="Play again!"/>
    </form>

    </body>
</html>