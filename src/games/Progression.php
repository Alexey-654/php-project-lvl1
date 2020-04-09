<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function progression()
{
    $gameName = "What number is missing in the progression?";

    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question[$i] = "";
        $progrSize = 10;
        $start = rand(1, 100);
        $pace = rand(2, 9);
        $position = rand(1, 10);
        $nextNum = $start;
        for ($index = 0; $index <= $progrSize; $index++) {
            if ($position === $index) {
                $question[$i] = "{$question[$i]} ..";
            } else {
                $question[$i] = "{$question[$i]} {$nextNum}";
            }
            $nextNum = $nextNum + $pace;
        }

        $rightAnswer[] = $start + $pace * $position;
    }

    start($gameName, $question, $rightAnswer);
}
