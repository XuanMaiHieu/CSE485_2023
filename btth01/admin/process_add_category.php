<?php
global $pdo;
$host = 'localhost';
$db = 'BTTH01_CSE485';
$user = 'root';
$pass = '1'; 
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db";

if(isset($_POST['theloai'])){
    $tgia = $_POST['theloai'];
    //Lay thong tin tu FORM gui toi

    try {
        $pdo = new PDO($dsn, $user, $pass);
        //echo"thanhcong";
        $theloai = $_POST['theloai'];
        
        // Câu lệnh INSERT
         $them = "INSERT INTO theloai (ten_tloai) VALUE (:theloai)";

        // Chuẩn bị câu lệnh SQL để thực thi
        $themtloai = $pdo->prepare($them);
    
        // Bind các giá trị
        $themtloai->bindParam(':theloai', $theloai, PDO::PARAM_STR);
        
    
        // Thực thi câu lệnh UPDATE
        $themtloai->execute();
    
        //echo "Cập nhật thành công!";
        $affected_rows = $themtloai->rowCount();

        if ($affected_rows > 0) {
            // Nếu có dòng dữ liệu được cập nhật thành công
            //echo "Cập nhật thành công!";

            // Chuyển hướng đến trang hiển thị tên tác giả
            header("Location: category.php"); 
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