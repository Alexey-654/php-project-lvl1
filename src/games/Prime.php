<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\LOOPS_COUNT;

function primeGame()
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        
    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $question = rand(1, 100);
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        $GameData[$i]['question'] = $question;
        $GameData[$i]['rightAnswer'] = $rightAnswer;
    }

    startGame($gameDescription, $GameData);
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
        }
    }
    return true;
}
