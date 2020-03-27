<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

use const BrainGames\Engine\QNT_LOOPS;

function gameCalc()
{
    // I can't manage how to separate line/promt function
    // from the game code to engine.php file becouse of side
    // affect of this function
    
    $askName = prompt('May I have your name?');
    line("Hello, %s!", $askName);

    $operators = ['*', '+', '-'];
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 20);
        $randOperators = $operators[rand(0, 2)];
        line("Question:{$firstOperand} {$randOperators} {$secondOperand}");
        $answer = prompt('Your answer');
        /*
        * calculate right answer
        */
        if ($randOperators === "*") {
            $rightAnswer = $firstOperand * $secondOperand;
        } elseif ($randOperators === "+") {
            $rightAnswer = $firstOperand + $secondOperand;
        } elseif ($randOperators === "-") {
            $rightAnswer = $firstOperand - $secondOperand;
        }
        /*
        * checking user answer
        */
        if ($answer == $rightAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $askName);
            return false;
        }
    }
    // onSuccess();
    line("Congratulations, %s!", $askName);
}
