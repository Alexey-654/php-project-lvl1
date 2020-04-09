<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\start;
use function BrainGames\Engine\onSuccess;
use function BrainGames\Engine\checkAnswer;

use const BrainGames\Engine\QNT_LOOPS;

function gcd()
{
    $gameName = "Find the greatest common divisor of given numbers.";
    
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstNum = rand(1, 50);
        $secondNum = rand(1, 100);
        $question[$i] = "{$firstNum} {$secondNum}";

        for ($index = 1; $index < $firstNum; $index++) {
            if ($firstNum % $index === 0 && $secondNum % $index === 0) {
                $rightAnswer[$i] = $index;
            }
        }
    }

    start($gameName, $question, $rightAnswer);
}
