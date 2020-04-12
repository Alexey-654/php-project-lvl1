<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function progression()
{
    $gameDescrption = "What number is missing in the progression?";

    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question = "";
        $progrSize = 10;
        $start = rand(1, 100);
        $pace = rand(2, 9); //шаг прогресии
        $position = rand(0, $progrSize);

        for ($index = 0; $index <= $progrSize; $index++) {
            if ($position === $index) {
                $question = "{$question} ..";
            } else {
                $nextNum = $start + $pace * $index;
                $question = "{$question} {$nextNum}";
            }
        }

        $rightAnswer = $start + $pace * $position;

        $accGameData[$i]['question'] = $question;
        $accGameData[$i]['rightAnswer'] = $rightAnswer;
    }

    start($gameDescrption, $accGameData);
}
