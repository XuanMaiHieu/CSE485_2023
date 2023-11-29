CREATE DATABASE BTTH01_CSE485
 
USE BTTH01_CSE485

CREATE TABLE tacgia(
		ma_tgia INT UNSIGNED PRIMARY KEY,
		ten_tgia VARCHAR(100),
		hinh_tgia VARCHAR(1000)
);
CREATE TABLE theloai(
		ma_tloai INT UNSIGNED PRIMARY KEY,
		ten_tloai VARCHAR(50)
);


CREATE TABLE baiviet(
		ma_bviet INT UNSIGNED PRIMARY KEY,
		tieude VARCHAR(200),
		ten_bhat VARCHAR(200),
		ma_tloai INT UNSIGNED,
		tomtat TEXT,
		noidung TEXT,
		ma_tgia INT UNSIGNED,
		ngayviet DATETIME DEFAULT CURRENT_TIMESTAMP,
		hinhanh VARCHAR(200),
		FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
		FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)
);

SELECT * FROM theloai