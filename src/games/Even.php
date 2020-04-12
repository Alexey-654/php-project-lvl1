<?php

namespace BrainGames\Even;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function even()
{
    $gameDescrption = 'Answer "yes" if the number is even, otherwise answer "no".';

    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question = rand(1, 1000);
        $question % 2 === 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        $accGameData[$i]['question'] = $question;
        $accGameData[$i]['rightAnswer'] = $rightAnswer;
    }
    
    start($gameDescrption, $accGameData);
}
