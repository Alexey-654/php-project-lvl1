<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function cli\input;

const QNT_LOOPS = 3;

function start()
{
    line('Welcome to the Brain Games!');
    line($GLOBALS['nameOfGame']);
    line("");
}

/*
function onSuccess()
{
    line("Congratulations, %s!", $askName);
}
*/
