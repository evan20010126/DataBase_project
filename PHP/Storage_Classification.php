<?php
    include "db_conn.php";
    $query = ("SELECT distinct Classification FROM Storage );
    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute(); //執行sql語法
    $result = $stmt->fetchAll();
    echo json_encode($result);
?>