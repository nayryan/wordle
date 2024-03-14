<?php
namespace Wordle\Test;

use PHPUnit\Framework\TestCase;
use Wordle\WordleEngine;
use Wordle\WordleGame;

class WordleEngineTest extends TestCase
{
    public function testScoreCalculation()
    {
        $wordleGame = new WordleGame();
        

        $wordleEngine = new WordleEngine($wordleGame);
        
    }

    
}