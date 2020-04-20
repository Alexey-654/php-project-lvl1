<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\LOOPS_COUNT;

function progressionGame()
{
    $gameDescription = "What number is missing in the progression?";

    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $progressionSize = 10;
        $start = rand(1, 100);
        $step = rand(2, 9);
        $position = rand(0, $progressionSize - 1);

        for ($index = 0; $index < $progressionSize; $index++) {
            if ($position === $index) {
                $progression[$index] = "..";
            } else {
                $nextNum = $start + $step * $index;
                $progression[$index] = $nextNum;
            }
        }
        $question = implode(" ", $progression);
        $rightAnswer = $start + $step * $position;
        $gameData[$i] = ['question' => $question, 'rightAnswer' => $rightAnswer];
    }

    playGame($gameDescription, $gameData);
}
