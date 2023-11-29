-- them trigger

ALTER TABLE theloai ADD SLBaiViet INT;

CREATE TRIGGER tg_CapNhatTheLoai
ON baiviet
AFTER INSERT, UPDATE, DELETE
AS
BEGIN

-- Thêm bài viết
IF (INSERTED.[ma_tloai] IS NOT NULL)
BEGIN

UPDATE theloai
SET SLBaiViet = SLBaiViet + 1
WHERE ma_tloai = INSERTED.[ma_tloai];

END;

-- Xóa bài viết
IF (DELETED.[ma_tloai] IS NOT NULL)
BEGIN

UPDATE theloai
SET SLBaiViet = SLBaiViet -	 1
WHERE ma_tloai = DELETED.[ma_tloai];

END;

END;

-- tao bang users

CREATE TABLE Users (
		ma_user INT UNSIGNED PRIMARY KEY NOT NULL,
		ten_user VARCHAR(200) NOT NULL,
		ten_dnhap CHAR(20) NOT NULL,
		mkhau INT NOT NULL,
); 

