<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Question;
use PHPUnit\Framework\Constraint\IsType;


class MailTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testCount()
    {
        $question = Question::All();
        $recordCount = $question->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
    }

}
