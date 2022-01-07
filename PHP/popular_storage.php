<?php
    include "db_conn.php";
    $query = ("SELECT BookName 
	FROM deal 
    NATURAL JOIN storage 
	GROUP BY BookName
	ORDER BY sum(DealAmount) desc");
    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute(); //執行sql語法
    $result = $stmt->fetchAll();   //將所有搜尋結果存於result
    echo json_encode($result); //回傳json格式
?>

