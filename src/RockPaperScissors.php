<?php
    class RockPaperScissors
    {
        private $playerInput;

        function __construct($input1)
        {
            $this->playerInput = $input1;
        }

        function getPlayerInput()
        {
            return $this->playerInput;
        }

        function save()
        {
            array_push($_SESSION['player_choices'], $this);
        }

        static function clear()
        {
            return $_SESSION['player_choices'] = array();
        }

        static function determineWinner($input1, $input2){

            $player_combos = array("rockrock"=>"draw", "scissorsscissors"=>"draw", "paperpaper"=>"draw", "rockpaper"=>"player2", "paperrock"=>"player1", "rockscissors" => "player1", "scissorsrock" => "player2", "scissorspaper"=>"player1", "paperscissors"=>"player2");
            
            $player_input = $input1->getPlayerInput() . $input2->getPlayerInput();

            foreach($player_combos as $combo => $return)  {
                if($player_input == $combo){
                    return $return;
                    $key++;
                }
            }
        }
    }
 ?>
