<?php
    $db_type = "mysql";
    $db_host = "localhost";
    $db_name = "test";
    $user_name ="root";
    $user_pass ="";
    
    $connection = new PDO("$db_type:host=$db_host;dbname=$db_name",$user_name,$user_pass);
    // Chuẩn bị câu truy vấn INSERT
    $stmt = $conn->prepare('INSERT INTO users (name, email, age) VALUES (?, ?, ?)');
    $stmt = $conn->prepare('INSERT INTO users (name, email, age) VALUES (:name, :mail, :age)');

    // Gán các biến vào các placeholder theo thứ tự
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $vmail);
    $stmt->bindParam(3, $age);

     // Thực thi truy vấn
     $name = "Nguyen Phuong Anh";
     $mail = "pgah1422@gmail.com";
     $age = "22";
     $stmt->execute();
    
?>