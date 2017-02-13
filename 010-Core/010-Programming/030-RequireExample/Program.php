<?php

require_once('SimpleClass.php');

$student = new Student();
$student->setName("Testing Student");
echo $student->getName();
?>