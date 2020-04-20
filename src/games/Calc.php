<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\LOOPS_COUNT;

function calcGame()
{
    $gameDescription = "What is the result of the expression?";
    $operators = ['*', '+', '-'];
    
    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 20);
        $randOperators = array_rand(array_flip($operators));
        $question = "$firstOperand $randOperators $secondOperand";

        switch ($randOperators) {
            case '*':
                $rightAnswer = $firstOperand * $secondOperand;
                break;
            case '+':
                $rightAnswer = $firstOperand + $secondOperand;
                break;
            case '-':
                $rightAnswer = $firstOperand - $secondOperand;
                break;
        }
        $gameData[] = ['question' => $question, 'rightAnswer' => $rightAnswer];
    }
    playGame($gameDescription, $gameData);
}
