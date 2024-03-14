<?php
namespace Wordle\Test;

use PHPUnit\Framework\TestCase;
use Wordle\Word;

class WordTest extends TestCase
{
    public function testGetRandomWord()
    {
        $word = Word::getRandomWord();
        
        $this->assertNotEmpty($word);
        
    }
}