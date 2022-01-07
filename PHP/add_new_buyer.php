<?php   /*記得第五行 value(int,varchar,varchar,varchar) 改成由前端網頁輸入*/
    include "db_conn.php";

    $BuyerName = $_REQUEST["a"]; //Line4 ~ Line6 前端要同步
    $BuyerPhone = $_REQUEST["b"];
    $BuyerAddress = $_REQUEST["c"];
    
    try{
        $query = ("INSERT INTO Buyer ( BuyerID,BuyerName,BuyerPhone,BuyerAddress) values(NULL,?,?,?)"); //value(int,varchar,varchar,varchar)
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $error = $stmt->execute(array($BuyerName,$BuyerPhone,$BuyerAddress)); //執行sql語法     
        echo json_encode(1); 
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo json_encode(array());
    }
    //若新增成功輸出1
    //若新增失敗輸出空陣列
?>