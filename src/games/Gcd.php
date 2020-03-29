<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\start;
use function BrainGames\Engine\onSuccess;
use function BrainGames\Engine\checkAnswer;

use const BrainGames\Engine\QNT_LOOPS;

function game()
{
    $nameOfGame = "Find the greatest common divisor of given numbers.";
    start($nameOfGame);

    $askName = prompt('May I have your name?');
    line("Hello, %s!", $askName);

    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstNum = rand(1, 50);
        $secondNum = rand(1, 100);
        line("Question:{$firstNum} {$secondNum}");
        $answer = prompt('Your answer');

        // calculate right answer
        for ($index = 1; $index < $firstNum; $index++) {
            if ($firstNum % $index === 0 && $secondNum % $index === 0) {
                $rightAnswer = $index;
            }
        }
         // checking user answer
         if (checkAnswer($answer, $rightAnswer, $askName) == false) {
            return;
        }
        // if user guess was right on all loops
        onSuccess($i, $askName);
    }
}
