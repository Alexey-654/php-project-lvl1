<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\LOOPS_COUNT;

function progressionGame()
{
    $gameDescription = "What number is missing in the progression?";

    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $question = "";
        $progrSize = 9;
        $start = rand(1, 100);
        $pace = rand(2, 9); //шаг прогресии
        $position = rand(0, $progrSize);

        for ($index = 0; $index <= $progrSize; $index++) {
            if ($position === $index) {
                $question = "{$question} ..";
            } else {
                $nextNum = $start + $pace * $index;
                $question = "{$question} {$nextNum}"; //не вижу лишних пробелов. искал отвественно.
            }
        }

        $rightAnswer = $start + $pace * $position;

        $GameData[$i]['question'] = $question;
        $GameData[$i]['rightAnswer'] = $rightAnswer;
    }

    startGame($gameDescription, $GameData);
}
