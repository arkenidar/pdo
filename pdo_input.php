<!doctype html>
<!-- submit text -->
<form method="get"> <input name="text"> </form>
<?php
require 'pdo.php';
// insert text when submitted
if(array_key_exists('text',$_REQUEST)) sqlquery($dbh, 'INSERT INTO TestTable VALUES (null,:text)', [':text'=>$_REQUEST['text']]);
// display all from table TestTable
echo '<pre style="color:blue">'; foreach(sqlquery($dbh, 'SELECT * from TestTable') as $row) echo htmlspecialchars(print_r($row,TRUE)); echo '</pre>';
