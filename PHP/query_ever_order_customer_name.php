<?php
    include "db_conn.php";
    try{
        $query = ("SELECT BuyerName FROM buyer WHERE buyer.BuyerID in (SELECT deal.BuyerID FROM deal)");
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $error = $stmt->execute(); //執行sql語法
        $result = $stmt->fetchAll();   //將所有搜尋結果存於result
        echo json_encode($result); //回傳json格式
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo $e->getMessage();
    }
    // SELECT BuyerName
    // FROM buyer
    // WHERE Buyer.BuyerID in (SELECT Deal.Buyer_ID FROM Deal)
?>