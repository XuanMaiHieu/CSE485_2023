<?php
global $pdo;
$host = 'localhost';
$db = 'BTTH01_CSE485';
$user = 'root';
$pass = '1'; 
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db";

if(isset($_POST['tacgia'])){
    $tgia = $_POST['tacgia'];
    //Lay thong tin tu FORM gui toi

    try {
        $pdo = new PDO($dsn, $user, $pass);
        //echo"thanhcong";
        $tacgia = $_POST['tacgia'];
        
        // Câu lệnh INSERT
         $them = "INSERT INTO tacgia (ten_tgia) VALUE (:tacgia)";

        // Chuẩn bị câu lệnh SQL để thực thi
        $themtgia = $pdo->prepare($them);
    
        // Bind các giá trị
        $themtgia->bindParam(':tacgia', $tacgia, PDO::PARAM_STR);
        
    
        // Thực thi câu lệnh UPDATE
        $themtgia->execute();
    
        //echo "Cập nhật thành công!";
        $affected_rows = $themtgia->rowCount();

        if ($affected_rows > 0) {
            // Nếu có dòng dữ liệu được cập nhật thành công
            //echo "Cập nhật thành công!";

            // Chuyển hướng đến trang hiển thị tên tác giả
            header("Location: author.php"); 
            exit(); // Đảm bảo không có mã PHP nào được thực thi sau khi chuyển hướng
        }  else {
            // Nếu không có dòng dữ liệu nào bị ảnh hưởng bởi câu lệnh UPDATE
            //echo "Không có dữ liệu được cập nhật!";
        }
    

    } catch (\PDOException $e) {
    echo $e->getMessage();
    }
    }

?>