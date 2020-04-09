<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const QNT_LOOPS = 3;

function start($gameName, $question, $rightAnswer)
{
    line('Welcome to the Brain Games!');
    line($gameName);
    line("");
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        line("Question:{$question[$i]}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $rightAnswer[$i]) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $rightAnswer[$i]);
            line("Let's try again, %s!", $userName);
            return false;
        }
    }

    line("Congratulations, %s!", $userName);
}
