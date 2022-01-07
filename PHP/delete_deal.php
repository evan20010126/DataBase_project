<?php   /*記得改第五行['DealID'] 成由前端網也輸入*/
    include "db_conn.php";
    $DealID = $_REQUEST["a"];
    $query = ("DELETE FROM Deal WHERE DealID =? "); //[DealID]依使用者輸入, 型態為int
    try{
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $error = $stmt->execute(array($DealID)); //執行sql語法
        $result = $stmt->fetchAll();   //將所有搜尋結果存於result
        echo json_encode(1); //回傳json格式
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo json_encode(array());
    }
    //若執行成功輸出1(包含原本不在的東西刪除等同於沒動作)
    //若執行失敗輸出空陣列
?>

