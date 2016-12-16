<?php
namespace App;

class Dog{
	private $name;

    function setName($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

	public function bark(){
		print("bow-bow");
	}
	
	private $id;
	private $instance;
	private function  _construct(){
	 $this->id = md(date('r').mt_rand());
	}
	public static function getInstance(){
		if(!isset(self::$instance)){
			self:: $instance = new Dog();
			echo 'a Singletopn Sample instance was created!';
		}
	return self::$instance;
	}
}

?>