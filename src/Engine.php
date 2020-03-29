<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const QNT_LOOPS = 3;

function start($nameOfGame)
{
    line('Welcome to the Brain Games!');
    line($nameOfGame);
    line("");
}

function checkAnswer($answer, $rightAnswer, $askName)
{
    if ($answer == $rightAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
        line("Let's try again, %s!", $askName);
        return false;
    }
}

function onSuccess($i, $askName)
{
    if ($i == QNT_LOOPS - 1) {
        line("Congratulations, %s!", $askName);
    }
}
