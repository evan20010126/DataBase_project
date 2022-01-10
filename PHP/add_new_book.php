<?php
    include "db_conn.php";
    
    $BookName = $_REQUEST["a"]; //Line4 ~ Line9 前端要同步
    $Price = $_REQUEST["b"];
    $Classification = $_REQUEST["c"];
    $StoreNumber = $_REQUEST["d"];
    try{
        $query = ("INSERT INTO storage(BookID,BookName,Price,Classification,StoreNumber) VALUES(NULL,?,?,?,?)");   
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $result = $stmt ->execute(array($BookName,$Price,$Classification,$StoreNumber));
        echo "1";
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo "error!" . $e->getMessage();
    }
    //若新增成功輸出1
    //若新增失敗輸出空陣列
?>