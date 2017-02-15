<?php
require_once "src/RockPaperScissors.php";
    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_determineWinner()
        {
            $test_winner = new RockPaperScissors;
                //Arrange
                $input1 = "scissors";
                $input2 = "rock";
                $test_winner->determineWinner($input1, $input2);
                //Act
                $result = $test_winner->determineWinner($input1, $input2);
                //Assert
                $this->AssertEquals("player2", $result);
        }
    }
 ?>
