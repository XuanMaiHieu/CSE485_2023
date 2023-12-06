<?php
    // Kết nối đến cơ sở dữ liệu
    $host = 'localhost';
    $db = 'BTTH01_CSE485';
    $user = 'root';
    $pass = '1'; 
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db";

    if(isset($_POST['baiviet'])){
        // Lấy dữ liệu từ form
        $tieude = $_POST['tieude'];
        $ten_bhat = $_POST['ten_bhat'];
        // $tomtat = $_POST['tomtat'];
        // $noidung = $_POST['noidung'];
        $ngayviet = $_POST['ngayviet'];

        try {
            // Tạo kết nối PDO mới
            $pdo = new PDO($dsn, $user, $pass);

            // Câu lệnh INSERT
            $them = "INSERT INTO baiviet (tieude, ten_bhat, tomtat, noidung, ngayviet) VALUES (:tieude, :ten_bhat, :tomtat, :noidung, :ngayviet)";

            // Chuẩn bị câu lệnh SQL để thực thi
            $thembviet = $pdo->prepare($them);

            // Bind các giá trị
            $thembviet->bindParam(':tieude', $tieude, PDO::PARAM_STR);
            $thembviet->bindParam(':ten_bhat', $ten_bhat, PDO::PARAM_STR);
            $thembviet->bindParam(':tomtat', $tomtat, PDO::PARAM_STR);
            $thembviet->bindParam(':noidung', $noidung, PDO::PARAM_STR);
            $thembviet->bindParam(':ngayviet', $ngayviet, PDO::PARAM_STR);

            // Thực thi câu lệnh INSERT
            $thembviet->execute();

            $affected_rows = $thembviet->rowCount();

            if ($affected_rows > 0) {
                //Nếu có dòng dữ liệu được chèn thành công
                header("Location: article.php"); 
                exit();
            } else {
                // Nếu không có dòng dữ liệu nào được chèn vào
                echo "Không có dữ liệu được chèn vào!";
            }
        } catch (\PDOException $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
?>
