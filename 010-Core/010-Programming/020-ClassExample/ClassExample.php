<?php
class Student {
	private $name;
	
	public function getName(){
		return $this->name;
	}
	
	public function setName($name){
		$this->name = $name;
	}
}

$student = new Student();
$student->setName("Testing Student");
echo $student->getName();
?>