<?php
/*
-- configure as needed:
- enable extension "pdo_mysql"
- configure user and password
*/
$user='root'; $password='password'; $dbname='testdb';
$dbh=initpdo($user,$password,$dbname);
// prepare for using database
function initpdo($user,$password,$dbname){
	return new PDO('mysql:host=localhost;dbname='.$dbname, $user, $password);
}
// submit sql query to the database
function sqlquery($dbh, $sql, $params=[]){
	// http://php.net/manual/en/class.pdostatement.php
	$sth=$dbh->prepare($sql);
	$sth->execute($params);
	return $sth->fetchAll(PDO::FETCH_ASSOC);
}
?>