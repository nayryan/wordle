<?php
namespace Wordle\Test;

use PHPUnit\Framework\TestCase;
use Wordle\WordleGame;

class WordleGameTest extends TestCase
{
    public function testGameInitialization()
    {
        $game = new WordleGame();
        
        $this->assertNotEmpty($game->getTargetWord());
        
    }

   
}