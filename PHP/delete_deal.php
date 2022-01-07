<?php   /*記得改第五行['DealID'] 成由前端網也輸入*/
    include "db_conn.php";
    
    $query = ("DELETE FROM Deal
               WHERE DealID = [DealID]"); //[DealID]依使用者輸入, 型態為int

    $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
    $error = $stmt->execute(); //執行sql語法
    $result = $stmt->fetchAll();   //將所有搜尋結果存於result
    echo json_encode($result); //回傳json格式
?>

