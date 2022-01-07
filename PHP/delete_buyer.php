<?php   /*記得第五行 ['BuyerID'] 改成由前端網頁輸入*/
    include "db_conn.php";
    
    $query = ("DELETE FROM Buyer 
               WHERE BuyerID = [BuyerID]"); //[BuyerID]依使用者輸入, 型態為int

    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute(); //執行sql語法
    $result = $stmt->fetchAll();   //將所有搜尋結果存於result
    echo json_encode($result); //回傳json格式
?>