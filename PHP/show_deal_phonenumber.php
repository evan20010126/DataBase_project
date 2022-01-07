<?php
    include "db_conn.php";
    try{
        $query = ("SELECT DealID ,BuyerPhone FROM deal ,buyer WHERE deal.BuyerID=buyer.BuyerID");
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $error = $stmt->execute(); //執行sql語法
        $result = $stmt->fetchAll();   //將所有搜尋結果存於result
        echo json_encode($result); //回傳json格式
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo json_encode();
    }
    //輸出{"DealID,"BuyerPhone"}}(依此排序輸出)
    //若查無則輸出空陣列
?>