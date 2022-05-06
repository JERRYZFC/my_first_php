<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("example.com", "cebim", "cebim888", "blog");

$mysqli->query("DROP TABLE IF EXISTS test");
//$mysqli->query("CREATE TABLE test(id INT)");
//
//$mysqli->query("DROP PROCEDURE IF EXISTS p");
//$mysqli->query("CREATE PROCEDURE p(IN id_val INT) BEGIN INSERT INTO test(id) VALUES(id_val); END;");
//
//$mysqli->query("CALL p(1)");
//
//$result = $mysqli->query("SELECT id FROM test");
//
//var_dump($result->fetch_assoc());



//$mysqli->query("DROP PROCEDURE IF EXISTS p");
//$mysqli->query('CREATE PROCEDURE p(OUT msg VARCHAR(50)) BEGIN SELECT "Hello world!" INTO msg; END;');
//
//$mysqli->query("SET @msg = ''");
//$mysqli->query("CALL p(@msg)");
//
//$result = $mysqli->query("SELECT @msg as _p_out");
//
//$row = $result->fetch_assoc();
//echo $row['_p_out'];

//$mysqli->query("CREATE TABLE test(id INT)");
//$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
//
//$mysqli->query("DROP PROCEDURE IF EXISTS p");
//$mysqli->query('CREATE PROCEDURE p()  READS SQL DATA  BEGIN SELECT id FROM test; SELECT id + 5 FROM test; END;');
//
//$mysqli->multi_query("CALL p()");
//
//do {
//    if ($result = $mysqli->store_result()) {
//        printf("<br/>---<br/>");
//        var_dump($result->fetch_all());
//        $result->free();
//    }
//} while ($mysqli->next_result());


//$mysqli->query("CREATE TABLE test(id INT)");
//$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
//
//$mysqli->query("DROP PROCEDURE IF EXISTS p");
//$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;');
//
//$stmt = $mysqli->prepare("CALL p()");
//$stmt->execute();
//
//do {
//    if ($result = $stmt->get_result()) {
//        printf("<br/>---<br/>");
//        var_dump($result->fetch_all());
//        $result->free();
//    }
//} while ($stmt->next_result());


//$mysqli->query("CREATE TABLE test(id INT)");
//$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)");
//
//$mysqli->query("DROP PROCEDURE IF EXISTS p");
//$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 3 FROM test;SELECT id + 6 FROM test; END;');
//
//$stmt = $mysqli->prepare("CALL p()");
//
//$stmt->execute();
//
//do {
//    if ($stmt->store_result()) {
//        $stmt->bind_result($id_out);
//        while ($stmt->fetch()) {
//            echo "id = $id_out<br/>";
//        }
//    }
//} while ($stmt->next_result());

//
//
//mysqli_multi_query ($mysqli, "CALL MyStoreProcedure") OR DIE (mysqli_error($mysqli));
//
//while (mysqli_more_results($mysqli)) {
//
//    if ($result = mysqli_store_result($mysqli)) {
//
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            // i.e.: DBTableFieldName="userID"
//            echo "row = ".$row["DBTableFieldName"]."<br />";
//
//        }
//        mysqli_free_result($result);
//    }
//    mysqli_next_result($mysqli);
//
//}
//?>
<!--*******************************************************************-->
<?php
//
//// Store procedure call using params
//
//$MyConnection = $mysqli;
//
//$MyParam1 ='aa';
//$MyParam2 ='dd';
//
//mysqli_query($MyConnection ,"SET @p0='".$MyParam1."'");
//mysqli_query($MyConnection ,"SET @p1='".$MyParam2."'");
//mysqli_multi_query ($MyConnection, "CALL MyStoreProcedure (@p0,@p1)") OR DIE (mysqli_error($MyConnection));
//
//while (mysqli_more_results($MyConnection)) {
//
//    if ($result = mysqli_store_result($MyConnection)) {
//
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            // i.e.: DBTableFieldName="userID"
//            echo "row = ".$row["DBTableFieldName"]."<br />";
//
//        }
//        mysqli_free_result($result);
//    }
//    mysqli_next_result($MyConnection);
//
//}
//?>








