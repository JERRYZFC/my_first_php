<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "cebim", "cebim888", "blog");

///* Non-prepared statement */
//$mysqli->query("DROP TABLE IF EXISTS test");
//$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
//
///* Prepared statement, stage 1: prepare */
//$stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");
//
///* Prepared statement, stage 2: bind and execute */
//$id = 1;
//$label = 'PHP';
//$stmt->bind_param("is", $id, $label); // "is" means that $id is bound as an integer and $label as a string
//
//$stmt->execute();


/* Non-prepared statement */
//$mysqli->query("DROP TABLE IF EXISTS test");
//$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
//
///* Prepared statement, stage 1: prepare */
//$stmt = $mysqli->prepare("INSERT INTO test(id, label) VALUES (?, ?)");
//
///* Prepared statement, stage 2: bind and execute */
//$stmt->bind_param("is", $id, $label); // "is" means that $id is bound as an integer and $label as a string
//
//$data = [
//    1 => 'PHP',
//    2 => 'Java',
//    3 => 'C++'
//];
//foreach ($data as $id => $label) {
//    $stmt->execute();
//}
//$result = $mysqli->query('SELECT id,label FROM test');


//$mysqli->query("CREATE TABLE test(id INT)");
//
//
//$values = [1, 2, 3, 4];
//
//$stmt = $mysqli->prepare("INSERT INTO test(id) VALUES (?), (?), (?), (?)");
//$stmt->bind_param('iiii', ...$values);
//$stmt->execute();


//$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
//$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");
//
//$stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
//$stmt->execute();
//$result = $stmt->get_result();
//$row = $result->fetch_assoc();
//
//printf("id = %s (%s)<br/>", $row['id'], gettype($row['id']));
//printf("label = %s (%s)<br/>", $row['label'], gettype($row['label']));
//$result = $mysqli->query('SELECT id,label FROM test');

//$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
//$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");
//
//$stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
//$stmt->execute();
//
//$stmt->bind_result($out_id, $out_label);
//
//while ($stmt->fetch()) {
//    printf("id = %s (%s), label = %s (%s)<br/>", $out_id, gettype($out_id), $out_label, gettype($out_label));
//}
//
//$result = $mysqli->query('SELECT id,label FROM test');


//var_dump($result->fetch_all(MYSQLI_ASSOC));


//$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
//$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP')");
//
//$stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = 1");
//$stmt->execute();
//
//$result = $stmt->get_result();
//
//var_dump($result->fetch_all(MYSQLI_ASSOC));

//$mysqli->query("CREATE TABLE test(id INT, label TEXT)");
//$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'PHP'), (2, 'Java'), (3, 'C++')");
//
//$stmt = $mysqli->prepare("SELECT id, label FROM test");
//$stmt->execute();
//
//$result = $stmt->get_result();
//
//for ($row_no = $result->num_rows - 1; $row_no >= 0; $row_no--) {
//    $result->data_seek($row_no);
//    var_dump($result->fetch_assoc());
//}