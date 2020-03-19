<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function isEven()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    line("");
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    
    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 1000);
        line("Question:{$a}");
        $answer = prompt('Your answer');
        $a % 2 === 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        if ($answer === $rightAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
