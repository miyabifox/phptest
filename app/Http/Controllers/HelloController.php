<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Dog;

class HelloController extends Controller {
    public function index() {

	$dog = new Dog();
	$dog->setName = "chip";
	//$dog->bark();

	return view('hello.index');
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


	//public function sum($num1,$num2)
   //{
	//$sum =  $num1 + $num2;
	//if($sum > 1999){
	//	return NULL;
		}
	//if($sum < -1999){
	//	return NULL;
	//	}
	//if($sum < -1999){
	//	return NULL;
	//	}
	//else(!is_int($num1) || (!is_int($num2)){
	//	return $sum;
	//	}
	//else{
	//   return $sum;
	//	}
	//}
	
	//public function sum($i, $j){
	//if(!is_int($num1) || (!is_int($num2));
