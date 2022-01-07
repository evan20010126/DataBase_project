<?php   /*記得第五行 value(int,varchar,varchar,varchar) 改成由前端網頁輸入*/
    include "db_conn.php";
    
    $query = ("INSERT INTO Buyer ( BuyerID,BuyerName,BuyerPhone,BuyerAddress)
               values(NULL,'Kim','0972060000','朝顯人名共和國中正路一號')"); //value(int,varchar,varchar,varchar)

    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute(); //執行sql語法
    $result = $stmt->fetchAll();   //將所有搜尋結果存於result
    echo json_encode($result); //回傳json格式
?>