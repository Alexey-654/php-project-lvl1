<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function calc()
{
    $gameName = "What is the result of the expression?";
    $operators = ['*', '+', '-'];
    
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 20);
        $randOperators = $operators[rand(0, count($operators) - 1)];
        $question[$i] = "{$firstOperand} {$randOperators} {$secondOperand}";

        switch ($randOperators) {
            case '*':
                $rightAnswer[$i] = $firstOperand * $secondOperand;
                break;
            case '+':
                $rightAnswer[$i] = $firstOperand + $secondOperand;
                break;
            case '-':
                $rightAnswer[$i] = $firstOperand - $secondOperand;
                break;
        }
    }
    start($gameName, $question, $rightAnswer);
}
