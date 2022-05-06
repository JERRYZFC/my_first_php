<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$mysqli = new mysqli( "localhost" ,"cebim" ,"cebim888" , "blog");

echo $mysqli->host_info . "<br/>";

$mysqli = new mysqli("127.0.0.1", "cebim", "cebim888", "blog", 3306);

echo $mysqli->host_info . "<br/>";



//$mysqli->query("DROP TABLE IF EXISTS test");
//$mysqli->query("CREATE TABLE test(id INT)");
//$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
//
//$result = $mysqli->query("SELECT id FROM test ORDER BY id ASC");
//
//echo "Reverse order...<br/>";
//for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
//    $result->data_seek($row_no);
//    $row = $result->fetch_assoc();
//    echo " id = " . $row['id'] . "<br/>";
//}
//
//echo "Result set order...<br/>";
//foreach ($result as $row) {
//    echo " id = " . $row['id'] . "<br/>";
//}
//
//
//$mysqli->real_query("SELECT id FROM test ORDER BY id ASC");
//$result = $mysqli->use_result();
//
//echo "Result set order...<br/>";
//foreach ($result as $row) {
//    echo " id = " . $row['id'] . "<br/>";
//}


//$mysqli->query("CREATE TABLE test(id INT, label CHAR(1))");
//$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')");
//
//$result = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
//$row = $result->fetch_assoc();
//
//printf("id = %s (%s)<br/>", $row['id'], gettype($row['id']));
//printf("label = %s (%s)<br/>", $row['label'], gettype($row['label']));


$mysqli = new mysqli();
$mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
$mysqli->real_connect("localhost", "cebim", "cebim888", "blog");

$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label CHAR(1))");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')");

$result = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
$row = $result->fetch_assoc();

printf("id = %s (%s)<br/>", $row['id'], gettype($row['id']));
printf("label = %s (%s)<br/>", $row['label'], gettype($row['label']));



echo '<br/>';


