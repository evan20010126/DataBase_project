<?php       /*記得第五行 value(int,varchar,int,int) 改成由前端網頁輸入*/
    include "db_conn.php";
    
    $BookID = $_REQUEST["a"]; //Line4 ~ Line6 前端要同步
    $BuyerID = $_REQUEST["b"];
    $DealAmount = $_REQUEST["c"];
    

    try{
        $query = ("INSERT INTO deal(DealID,BookID,BuyerID,DealAmount) VALUES(NULL,?,?,?)"); //value(int,varchar,int,int)
        $stmt = $db->prepare($query);    //db為db_conn_sofware.php新建的連線物件 
        $error = $stmt->execute(array($BookID,$BuyerID,$DealAmount)); //執行sql語法
        echo "1";
    }
    catch(Exception $e){ //若上述程式碼出現錯誤，便會執行以下動作
        echo strval("error!\n" . $e->getMessage());
    }
    //若新增成功輸出1
    //若新增失敗輸出空陣列
?>