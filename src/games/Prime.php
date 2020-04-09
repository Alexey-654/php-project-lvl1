<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function prime()
{
    $gameName = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question[$i] = rand(1, 100);
        $rightAnswer[$i] = isPrime($question[$i]) ? 'yes' : 'no';
    }

    start($gameName, $question, $rightAnswer);
}

function isPrime($question)
{
    if ($question === 1 || $question === 2) {
        return true;
    }
    if ($question <= 0) {
        return false;
    }

    for ($index = 2; $index < $question / 2; $index++) {
        if ($question % $index === 0) {
            $isPrime = false;
            return $isPrime;
        } else {
            $isPrime = true;
        }
    }
    return $isPrime;
}
