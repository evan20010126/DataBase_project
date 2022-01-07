<?php       /*記得第五行 value(int,varchar,int,int) 改成由前端網頁輸入*/
    include "db_conn.php";
    
    $query = ("INSERT INTO deal(DealID,BookName,BuyerID,DealAmount)
               VALUES(NULL,'nuclear3000', 101, 20000)"); //value(int,varchar,int,int)

    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute(); //執行sql語法
    $result = $stmt->fetchAll();   //將所有搜尋結果存於result
    echo json_encode($result); //回傳json格式
?>