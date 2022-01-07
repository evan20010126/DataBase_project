<?php       /*記得第五行[DealID] 改成由前端網頁輸入*/
    include "db_conn.php";
    
    $query = ("UPDATE Deal
               SET [Attribute] =  [value]  /*[Attribute]與[value]依使用者輸入*/
               WHERE DealID = [DealID]"); //[DealID]依使用者輸入

    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute(); //執行sql語法
    $result = $stmt->fetchAll();   //將所有搜尋結果存於result
    echo json_encode($result); //回傳json格式
?>