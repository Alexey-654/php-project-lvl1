<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\start;
use function BrainGames\Engine\onSuccess;
use function BrainGames\Engine\checkAnswer;

use const BrainGames\Engine\QNT_LOOPS;

function game()
{
    $nameOfGame = 'Answer "yes" if the number is even, otherwise answer "no".';
    start($nameOfGame);

    $askName = prompt('May I have your name?');
    line("Hello, %s!", $askName);
    
    for ($i = 0; $i < 3; $i++) {
        $question = rand(1, 1000);
        line("Question:{$question}");
        $answer = prompt('Your answer');
        $question % 2 === 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        
        // checking user answer
        if (checkAnswer($answer, $rightAnswer, $askName) == false) {
            return;
        }
        // if user guess was right on all loops
        onSuccess($i, $askName);
    }
}
