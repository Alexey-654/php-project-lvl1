<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const LOOPS_COUNT = 3;

function startGame($gameDescription, $GameData)
{
    line('Welcome to the Brain Games!');
    line($gameDescription);
    line("");
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    
    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        [
            'rightAnswer' => $rightAnswer,
            'question' => $question
        ]
            = $GameData[$i];
        line("Question:{$question}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer == $rightAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $rightAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }

    line("Congratulations, %s!", $userName);
}
