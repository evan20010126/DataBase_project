<?php
    header("Content-type:text/html;charset=utf-8");
    include "db_conn.php";

    echo "<table border='1'>
    <tr>
    <th>BuyerName</th>
    </tr>";

    $query = (  "SELECT BookName 
                FROM Storage;
	            GROUP BY BookName
	            ORDER BY sum(DealAmount) desc");
    $stmt =  $db->prepare($query);
    $error= $stmt->execute();
    $result = $stmt->fetchAll();
    //以上寫法是為了防止「sql injection」
    
    for($i=0; $i<count($result); $i++){
        echo "<tr>";
        echo "<td>".$result[$i]['BuyerName']."</td>";
        echo "</tr>."; 
    }
    echo "</table>";
    echo "<br><input type = 'button' onclick = 'history.back()' value = 'Go Back'></input>"


?>