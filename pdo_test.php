<?php
require 'pdo.php';
foreach(sqlquery($dbh, 'SELECT * from TestTable') as $row) print_r($row);
