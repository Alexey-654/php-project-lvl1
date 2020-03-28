<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

use const BrainGames\Engine\QNT_LOOPS;

function game()
{
    $askName = prompt('May I have your name?');
    line("Hello, %s!", $askName);

    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question = "";
        $start = rand(1, 100);
        $pace = rand(2, 9);
        $position = rand(1, 10);
        $nextNum = $start;
        for ($index = 0; $index <= 10; $index++) {
            if ($position === $index) {
                $question = "{$question} ..";
            } else {
                $question = "{$question} {$nextNum}";
            }
            $nextNum = $nextNum + $pace;
        }
        line("Question:{$question}");
        $answer = prompt('Your answer');
        /*
        * calculate right answer
        */
        $rightAnswer = $start + $pace * $position;
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
