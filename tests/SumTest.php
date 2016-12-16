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
	
public function sum($i, $j){
  if( !is_int($i) || !is_int($j) ) return;
  if( is_float($i) || is_float($j)) return;
  if( $i > 999 || $j > 999 ) return;
  if( $i < -999 || $j < -999 ) return;
  $result  = $i + $j;
  if( $result == 777 ) return "Happy";
  if( $result > 1998 ) return;
  if( $result < -1998 ) return;
  return $result;
  }
	
	//public function testtext()		
    //{
    //    $this->visit('/')
	//		 ->view()->click()
    //         ->dontSee('Error');
    //}
}
