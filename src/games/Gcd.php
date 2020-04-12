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
    $gameDescrption = "Find the greatest common divisor of given numbers.";
    
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstNum = rand(2, 50);
        $secondNum = rand(2, 100);
        $question = "{$firstNum} {$secondNum}";
        $rightAnswer = getRightGcd($firstNum, $secondNum);
        $accGameData[$i]['question'] = $question;
        $accGameData[$i]['rightAnswer'] = $rightAnswer;
    }

    start($gameDescrption, $accGameData);
}

function getRightGcd($firstNum, $secondNum)
{
    for ($index = 1; $index <= $firstNum; $index++) {
        if ($firstNum % $index === 0 && $secondNum % $index === 0) {
            $rightAnswer = $index;
        }
    }
    return $rightAnswer;
}
