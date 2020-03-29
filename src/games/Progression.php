<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\start;
use function BrainGames\Engine\onSuccess;
use function BrainGames\Engine\checkAnswer;

use const BrainGames\Engine\QNT_LOOPS;

function game()
{
    $nameOfGame = "What number is missing in the progression?";
    start($nameOfGame);
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

        // calculate right answer
        $rightAnswer = $start + $pace * $position;
        // checking user answer
        if (checkAnswer($answer, $rightAnswer, $askName) == false) {
            return;
        }
        // if user guess was right on all loops
        onSuccess($i, $askName);
    }
}
