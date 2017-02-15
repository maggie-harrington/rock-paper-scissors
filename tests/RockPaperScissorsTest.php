<?php
require_once "src/RockPaperScissors.php";
class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
{
    function test_determineWinner()
    {
        //Arrange
        $test_RockPaperScissors  = new RockPaperScissors($input1, $input2);
        $input1 =
        $input2 =
        //Act
        $result = $test_RockPaperScissors->determineWinner($input1, $input2);
        //Assert
        $this->assertEquals(, $result);
    }
}

?>
