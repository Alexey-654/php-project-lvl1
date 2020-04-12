<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function calc()
{
    $gameDescrption = "What is the result of the expression?";
    $operators = ['*', '+', '-'];
    
    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $firstOperand = rand(1, 50);
        $secondOperand = rand(1, 20);
        $randOperators = array_rand(array_flip($operators));
        $question = "{$firstOperand} {$randOperators} {$secondOperand}";

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
        $accGameData[$i]['question'] = $question;
        $accGameData[$i]['rightAnswer'] = $rightAnswer;
    }
    start($gameDescrption, $accGameData);
}
