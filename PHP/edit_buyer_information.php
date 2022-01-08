<?php       /*記得第五行[DealID] 改成由前端網頁輸入*/
    include "db_conn.php";
    $Attribute=$_REQUEST["b"];
    $value=$_REQUEST["c"];
    $BuyerID=$_REQUEST["a"];
    
    $query = ("UPDATE buyer SET " . strval($Attribute) . " =  ? WHERE BuyerID = ?"); 
    try{
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $error = $stmt->execute(array($value,$BuyerID)); //執行sql語法
        $result = $stmt->fetchAll();   //將所有搜尋結果存於result
        echo json_encode(1); //回傳json格式
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo json_encode(array());
    }
    //若執行成功輸出1
    //若執行失敗輸出空陣列
?>