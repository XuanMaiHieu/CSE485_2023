-- tao bang users



-- câu f.	Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)

SELECT tacgia.ten_tgia, COUNT(baiviet.ma_bviet) AS SoBaiViet FROM tacgia
JOIN baiviet ON tacgia.ma_tgia =  baiviet.ma_tgia 
GROUP BY tacgia.ma_tgia
ORDER BY SoBaiViet DESC
LIMIT 2;

-- câu g.	Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” 

SELECT * FROM baiviet
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%';

-- câu h.	Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” 
SELECT * FROM baiviet 
WHERE tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%' 
OR  ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%'