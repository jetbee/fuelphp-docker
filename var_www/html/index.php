<?php 
    try {
        // host=XXXの部分のXXXにはmysqlのサービス名を指定します
        $dsn = 'mysql:host=mysql;dbname=fuel_db;';
        $db = new PDO($dsn, 'root', 'fuel_db_password');

        $sql = 'SELECT version();';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
