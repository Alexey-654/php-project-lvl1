<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const LOOPS_COUNT = 3;

function playGame($gameDescription, $gameData)
{
    line('Welcome to the Brain Games!');
    line($gameDescription);
    line("");
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    
    foreach ($gameData as $gameDataSlice) {
        [
            'rightAnswer' => $rightAnswer,
            'question' => $question
        ]
            = $gameDataSlice;
        line("Question: $question");
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
