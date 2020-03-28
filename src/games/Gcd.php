<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;

use const BrainGames\Engine\QNT_LOOPS;

function game()
{
    $askName = prompt('May I have your name?');
    line("Hello, %s!", $askName);

    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstNum = rand(1, 50);
        $secondNum = rand(1, 100);
        line("Question:{$firstNum} {$secondNum}");
        $answer = prompt('Your answer');
        /*
        * calculate right answer
        */
        for ($index = 1; $index < $firstNum; $index++) {
            if ($firstNum % $index === 0 && $secondNum % $index === 0) {
                $rightAnswer = $index;
            }
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
    line("Congratulations, %s!", $askName);
}
