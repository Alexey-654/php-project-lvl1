<?php

namespace BrainGames\Even;

use function BrainGames\Engine\playGame;

use const BrainGames\Engine\LOOPS_COUNT;

function evenGame()
{
    $gameDescription = 'Answer "yes" if the number is even, otherwise answer "no".';

    for ($i = 0; $i < LOOPS_COUNT; $i++) {
        $question = rand(1, 1000);
        $rightAnswer = $question % 2 === 0 ? 'yes' : 'no';
        $gameData[] = ['question' => $question, 'rightAnswer' => $rightAnswer];
    }
    
    playGame($gameDescription, $gameData);
}
