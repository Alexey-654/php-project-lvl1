<?php

namespace BrainGames\Even;

use function BrainGames\Engine\startGame;

use const BrainGames\Engine\LOOPS_COUNT;

function evenGame()
{
    $gameDescription = 'Answer "yes" if the number is even, otherwise answer "no".';

    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $question = rand(1, 1000);
        $question % 2 === 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        $GameData[$i]['question'] = $question;
        $GameData[$i]['rightAnswer'] = $rightAnswer;
    }
    
    startGame($gameDescription, $GameData);
}
