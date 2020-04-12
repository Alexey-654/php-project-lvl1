<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const QNT_LOOPS = 3;

function start($gameDescrption, $accGameData)
{
    line('Welcome to the Brain Games!');
    line($gameDescrption);
    line("");
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        line("Question:{$accGameData[$i]['question']}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $accGameData[$i]['rightAnswer']) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $accGameData[$i]['rightAnswer']);
            line("Let's try again, %s!", $userName);
            return false;
        }
    }

    return line("Congratulations, %s!", $userName);
}
