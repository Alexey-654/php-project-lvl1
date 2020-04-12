<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function prime()
{
    $gameDescrption = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question = rand(1, 100);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        $accGameData[$i]['question'] = $question;
        $accGameData[$i]['rightAnswer'] = $rightAnswer;
    }

    start($gameDescrption, $accGameData);
}

function isPrime($question)
{
    if ($question === 2) {
        return true;
    }
    if ($question <= 1) {
        return false;
    }

    for ($index = 2; $index < $question / 2; $index++) {
        if ($question % $index === 0) {
            return false;
        } else {
            $isPrime = true;
        }
    }
    return $isPrime;
}
