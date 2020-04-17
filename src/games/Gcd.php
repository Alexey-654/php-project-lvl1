<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\LOOPS_COUNT;

function gcdGame()
{
    $gameDescription = "Find the greatest common divisor of given numbers.";
    
    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $firstNum = rand(2, 50);
        $secondNum = rand(2, 100);
        $question = "{$firstNum} {$secondNum}";
        $rightAnswer = getGcd($firstNum, $secondNum);
        $GameData[$i]['question'] = $question;
        $GameData[$i]['rightAnswer'] = $rightAnswer;
    }

    startGame($gameDescription, $GameData);
}

function getGcd($firstNum, $secondNum)
{
    for ($index = 1; $index <= $firstNum; $index++) {
        if ($firstNum % $index === 0 && $secondNum % $index === 0) {
            $rightAnswer = $index;
        }
    }
    return $rightAnswer;
}
