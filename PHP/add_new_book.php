<?php
    include "db_conn.php";
    
    $BookID = $_REQUEST["a"]; //Line4 ~ Line9 前端要同步
    $BookName = $_REQUEST["b"];
    $Price = $_REQUEST["c"];
    $Classification = $_REQUEST["d"];
    $StoreNumber = $_REQUEST["e"];
    try{
        $query = ("INSERT INTO storage(BookID,BookName,Price,Classification,StoreNumber) VALUES(?,?,?,?,?)");   
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $result = $stmt ->execute(array($BookID,$BookName,$Price,$Classification,$StoreNumber));
        echo json_encode(1);
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo json_encode(array());
    }
    //若新增成功輸出1
    //若新增失敗輸出空陣列
?>