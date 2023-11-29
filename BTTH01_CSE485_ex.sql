-- tao bang users

--Câu i
CREATE VIEW vw_Music AS
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;
----------------------------
SELECT * FROM vw_Music;

--Câu J
DELIMITER //
CREATE PROCEDURE sp_DSBaiViet (IN tenTheLoai VARCHAR(50))
BEGIN
    DECLARE maTheLoai INT;
    
    SELECT ma_tloai INTO maTheLoai FROM theloai WHERE ten_tloai = tenTheLoai;
    
    IF maTheLoai IS NULL THEN
        SELECT 'Thể loại không tồn tại' AS Loi;
    ELSE
        SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, baiviet.ten_bhat, baiviet.ngayviet
        FROM baiviet
        INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
        WHERE theloai.ten_tloai = tenTheLoai;
    END IF;
END //
DELIMITER ;
----------------------------------------------------------------------------------------------
CALL sp_DSBaiViet('Nhạc trẻ ');




