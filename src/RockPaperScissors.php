<?php
    class RockPaperScissors
    {
        // private $player1Input;
        // private $player2Input;

        // function __construct($input1, $input2)
        // {
        //     $this->player1Input = $input1;
        //     $this->player2Input = $input2;
        // }

        function getPlayer1Input()
        {
            return $this->player1Input;
        }
        function getPlayer2Input()
        {
            return $this->player2Input;
        }

        function determineWinner($input1, $input2){

            $player_combos = array("rockrock"=>"draw", "rockpaper"=>"player2", "paperrock"=>"player1", "rockscissors" => "player1","scissorsrock" => "player2");
            $player_input = $input1 . $input2;

            foreach($player_combos as $combo => $return)  {
                if($player_input == $combo){
                    return $return;
                    $key++;
                }
            }

        }
    }
 ?>
