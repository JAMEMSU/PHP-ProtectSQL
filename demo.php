<?php

include 'security_sql.php';


/*
query(sql,array);

sql = คำสั่ง sql
array = ข้อมูล array ที่จะ bind เข้าไป

*/

//select
$select = query("SELECT * FROM training_admin");
$row = $select->fetch(PDO::FETCH_ASSOC);
print_r($result);

//insert
$insert = query("INSERT INTO training_admin (admin_user,admin_pass) VALUES (?,?);",['jame','maya2600']);

//Update
$update = query("UPDATE training_admin SET admin_user= ? WHERE admin_id = ? ",['jame',33]);

//Delete
$delete = query("DELETE FROM training_admin where admin_id = ?",['34']);



?>



