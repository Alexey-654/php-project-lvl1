<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\start;
use function BrainGames\Engine\onSuccess;
use function BrainGames\Engine\checkAnswer;

use const BrainGames\Engine\QNT_LOOPS;

function game()
{
    $nameOfGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    start($nameOfGame);

    $askName = prompt('May I have your name?');
    line("Hello, %s!", $askName);
    
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question = rand(1, 100);
        line("Question:{$question}");
        $answer = prompt('Your answer');

        // calculate right answer
        $rightAnswer = isPrime($question) ? 'yes' : 'no';
        // checking user answer
        if (checkAnswer($answer, $rightAnswer, $askName) == false) {
            return;
        }
        // if user guess was right on all loops
        onSuccess($i, $askName);
    }
}

function isPrime($question)
{
    if ($question === 1 || $question === 2) {
        return true;
    }
    for ($index = 2; $index < $question; $index++) {
        if ($question % $index === 0) {
            $isPrime = false;
            return $isPrime;
        } else {
            $isPrime = true;
        }
    }
    return $isPrime;
}
