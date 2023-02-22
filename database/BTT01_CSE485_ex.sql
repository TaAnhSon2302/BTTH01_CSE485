/*a*/
SELECT tieude, ten_tgia from baiviet, tacgia where baiviet.ma_tgia = tacgia.ma_tgia and ten_tgia='Nhacvietplus';
/*b*/
select tieude, ten_bhat, ten_tloai from baiviet,theloai where baiviet.ma_tloai = theloai.ma_tloai and ten_tloai='Nhạc trữ tình';
/*c*/
SELECT theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_bviet IS NULL;
/*d*/
select ma_bviet,tieude,ten_bhat,ten_tgia,ten_tloai, ngayviet from baiviet,theloai,tacgia where baiviet.ma_tgia =tacgia.ma_tgia and baiviet.ma_tloai = theloai.ma_tloai; 
/*e*/
SELECT theloai.ten_tloai 
FROM theloai 
INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai 
GROUP BY theloai.ten_tloai 
ORDER BY COUNT(baiviet.ma_bviet) DESC 
LIMIT 2;*/
/*f*/
SELECT p.ten_tgia, COUNT(*) ten_bhat
FROM tacgia as p
JOIN baiviet AS o ON p.ma_tgia =o.ma_tgia
GROUP BY p.ten_tgia
ORDER BY ten_bhat DESC
LIMIT 2;
/*g*/
SELECT * FROM baiviet 
WHERE tieude like '%yêu%' OR tieude like '%thương%' OR tieude like '%anh%' OR tieude like '%em%';
/*i*/
CREATE VIEW vw_Music AS
SELECT baiviet.ma_bviet, baiviet.tieude, baiviet.ten_bhat, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet
LEFT JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
LEFT JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;
/*j*/
CREATE PROCEDURE sp_DSBaiViet(IN pTenTloai VARCHAR(255));
/*l*/
CREATE TABLE users (id_ngdung INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              		tai_khoan varchar(50) NOT NULL,
             		mat_khau varchar(50) NOT NULL,
                   quyen_han varchar(50) NOT NULL)