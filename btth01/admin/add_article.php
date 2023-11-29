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
    <header style="height: 430px">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
                    <form action="process_add_category.php" method="post">
                    <div class="input-group mt-3 mb-3">
                            <span class="input-group-text" id="lblCatName">Mã bài viết</span>
                            <input type="text" class="form-control" name="txtCatName" >
                        </div>
                        <div class="input-group mt-3 mb-3">
                            <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                            <input type="text" class="form-control" name="txtCatName" >
                        </div>
                        <form action="process_add_category.php" method="post">
                        <div class="input-group mt-3 mb-3">
                            <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                            <input type="text" class="form-control" name="txtCatName" >
                        </div>
                        <form action="process_add_category.php" method="post">
                        <div class="input-group mt-3 mb-3">
                            <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                            <input type="text" class="form-control" name="txtCatName" >
                        </div>
                        <form action="process_add_category.php" method="post">
                        <div class="input-group mt-3 mb-3">
                            <span class="input-group-text" id="lblCatName">Nội dung</span>
                            <input type="text" class="form-control" name="txtCatName" >
                        </div>
                        <form action="process_add_category.php" method="post">
                        <div class="input-group mt-3 mb-3">
                            <span class="input-group-text" id="lblCatName">Ngày viết</span>
                            <input type="date" class="form-control" name="txtCatName" >
                        </div>
                        <div class="form-group  float-end ">
                            <input type="submit" value="Thêm" class="btn btn-success">
                            <a href="article.php" class="btn btn-warning ">Quay lại</a>
                        </div>
                    </form>
                </div>
        </header>
        <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height: 80px">
            <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>