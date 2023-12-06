<?php
global $pdo;
$host = 'localhost';
$db = 'BTTH01_CSE485';
$user = 'root';
$pass = '1'; 
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db";

if (isset($_GET['delete_id'])) { // Kiểm tra xem có yêu cầu xoá không (ví dụ: ?delete_id=1)
    try {
        $pdo = new PDO($dsn, $user, $pass);

        // Lấy ID của tác giả cần xoá từ tham số trên URL
        $delete_id = $_GET['delete_id'];

        // Câu lệnh DELETE để xoá tác giả có ID nhất định
        $xoa = "DELETE FROM tacgia WHERE id = :delete_id";

        // Chuẩn bị câu lệnh SQL để thực thi
        $xoatgia = $pdo->prepare($xoa);

        // Bind giá trị ID cần xoá vào câu lệnh SQL
        $xoatgia->bindParam(':delete_id', $delete_id, PDO::PARAM_INT);

        // Thực thi câu lệnh DELETE
        $xoatgia->execute();

        $affected_rows = $xoatgia->rowCount();

        if ($affected_rows > 0) {
            // Nếu có dòng dữ liệu bị xoá thành công
            // echo "Xoá tác giả thành công!";

            // Chuyển hướng đến trang hiển thị tác giả sau khi xoá
            // header("Location: author.php"); 
            exit(); // Đảm bảo không có mã PHP nào được thực thi sau khi chuyển hướng
        } else {
            // Nếu không có dòng dữ liệu nào bị xoá
            // echo "Không có tác giả nào được xoá!";
        }
    } catch (\PDOException $e) {
        echo $e->getMessage();
    }
}
?>
