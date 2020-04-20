<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\LOOPS_COUNT;

function gcdGame()
{
    $gameDescription = "Find the greatest common divisor of given numbers.";
    
    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $firstNum = rand(2, 50);
        $secondNum = rand(2, 100);
        $question = "$firstNum $secondNum";
        $rightAnswer = getGcd($firstNum, $secondNum);
        $gameData[] = ['question' => $question, 'rightAnswer' => $rightAnswer];
    }

    playGame($gameDescription, $gameData);
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
