<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\HelloController;

class SumTest extends TestCase
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
    public function setUp()
    {
        parent::setUp();
		$this->HelloController = new HelloController();
    }
	
	public function testSum()
    {
		$this->assertEquals($this->HelloController->sum(10,10),20);
    }
	
	public function testtext()
    {
        $this->visit('/')
			 ->view()->click()
             ->dontSee('Error');
    }
}
