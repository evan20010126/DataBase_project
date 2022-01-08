<?php
    include "db_conn.php";

    $DaelID = $_REQUEST["a"];
    try{
        $query = ("SELECT DealID,BuyerPhone FROM deal,buyer WHERE Deal.BuyerID = Buyer.BuyerID and deal.DealID = ?");
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $error = $stmt ->execute(array($DaelID));
        $result = $stmt->fetchAll();
        echo json_encode($result); //回傳json格式
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo json_encode(array());
    }
    //輸出{"DealID,"BuyerPhone"}}(依此排序輸出)
    //若查無則輸出空陣列
?>