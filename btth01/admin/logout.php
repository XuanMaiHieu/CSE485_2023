<?php
//kiem soat
session_start();

if(!isset($_SESSION['islogined'])){
    header("location: index.php");
    exit(1);
}
try {
    $pdo = new PDO($dsn, $user, $pass);
    //echo"thanh cong";
    $sql = "select * from user";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

} catch (\PDOException $e){
    echo $e->getMessage();
}
?>