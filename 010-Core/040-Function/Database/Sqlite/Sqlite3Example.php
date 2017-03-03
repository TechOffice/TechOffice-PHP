<?php
	try{
		// Create SQLite Database in file
		// The table file would be in same folder with this file and named messaging.sqlite3.
		$db = new PDO('sqlite:messaging.sqlite3');
		
		// Create Table if not exisi
		$db->exec("create table if not exists test (id int primary key, name varchar2)");
		
		// Insert into table and blind data
		$insertStmt = $db->prepare("insert into test values (:id, :name)");
		$insertStmt->execute(array(1, 'test'));
		
		// Query the result
		$results  = $db->query("select id, name from test");
		while($row = $results->fetch()){
			echo $row['id'] . " " . $row['name'];
		}
		
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>