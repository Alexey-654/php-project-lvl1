<?php

namespace BrainGames\Even;

use function BrainGames\Engine\start;

use const BrainGames\Engine\QNT_LOOPS;

function even()
{
    $gameName = 'Answer "yes" if the number is even, otherwise answer "no".';

    for ($i = 0; $i < QNT_LOOPS; $i++) {
        $question[$i] = rand(1, 1000);
        $question[$i] % 2 === 0 ? $rightAnswer[$i] = 'yes' : $rightAnswer[$i] = 'no';
    }
    
    start($gameName, $question, $rightAnswer);
}
