<?php
    class RockPaperScissors
    {
        private $player1Input;

        function __construct($input1)
        {
            $this->player1Input = $input1;

        }

        function getPlayer1Input()
        {
            return $this->player1Input;
        }
        function getPlayer2Input()
        {
            return $this->player2Input;
        }

        function save()
        {
            array_push($_SESSION['player_choices'], $this);
        }

        function determineWinner($input1, $input2){

            $player_combos = array("rockrock"=>"draw", "scissorsscissors"=>"draw", "paperpaper"=>"draw", "rockpaper"=>"player2", "paperrock"=>"player1", "rockscissors" => "player1", "scissorsrock" => "player2", "scissorspaper"=>"player1", "paperscissors"=>"player2");
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
