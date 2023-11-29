<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
    <title>Thêm bài viết</title>
</head>
<body>
<div class="row" style="padding-top: 10px">
            <div class="col-sm" >
                <a href="add_article.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Mã thể loại</th>
                            <th scope="col">Tên bài hát</th>
                            <th scope="col">Ngày viết</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Quê hương</td>
                            <td>3</td>
                            <td>Quê tôi</td>
                            <td>1/1/2008</td>
                            <td>
                                <a href="edit_article.php"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mưa</td>
                            <td>2</td>
                            <td>Mưa tháng sáu</td>
                            <td>7/8/2020</td>
                            <td>
                                <a href="edit_article.php"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Giai đình</td>
                            <td>4</td>
                            <td>Đến giờ cơm</td>
                            <td>5/7/2020</td>
                            <td>
                                <a href="edit_article.php"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>