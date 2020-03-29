<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\start;
use function BrainGames\Engine\onSuccess;
use function BrainGames\Engine\checkAnswer;

use const BrainGames\Engine\QNT_LOOPS;

function game()
{
    $nameOfGame = "What is the result of the expression?";
    start($nameOfGame);
    $askName = prompt('May I have your name?');
    line("Hello, %s!", $askName);

    $operators = ['*', '+', '-'];
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 20);
        $randOperators = $operators[rand(0, 2)];
        line("Question:{$firstOperand} {$randOperators} {$secondOperand}");
        $answer = prompt('Your answer');
       
        // calculate right answer
        if ($randOperators === "*") {
            $rightAnswer = $firstOperand * $secondOperand;
        } elseif ($randOperators === "+") {
            $rightAnswer = $firstOperand + $secondOperand;
        } elseif ($randOperators === "-") {
            $rightAnswer = $firstOperand - $secondOperand;
        }
        // checking user answer
        if (checkAnswer($answer, $rightAnswer, $askName) == false) {
            return;
        }
        // if user guess was right on all loops
        onSuccess($i, $askName);
    }
}
