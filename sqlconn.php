<?php
    $conn = new \mysqli('127.0.0.1:3306','root','root');
    $select_db = $conn->select_db('wine');
    $sql = "SELECT *,u.id as m FROM  wine_user as u RIGHT JOIN wine_collection as c on u.id=c.userid and c.status>0";
    $res = $conn->query($sql);
    while ($row = $res->fetch_assoc()){
        var_dump($row);
        echo '</br>';
    }
    $conn->close();