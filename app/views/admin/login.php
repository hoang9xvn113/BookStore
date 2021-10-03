<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH . 'style1.css' ?>">
    <title>Document</title>
</head>
<body>
<main class="container d-flex justify-content-center">
<form action="" method="POST" class="form pd-lr-2 check-form">
    <h1 class="mr-b-2 text-align-center">Đăng nhập</h1>
    <p class="mr-b-3 text-align-center">Đăng nhập để truy cập các chức năng           </p>
    <h4 class="mr-b-1">Tài khoản</h4>
    <input type="text" placeholder="Tài khoản" name="user"  class="w-100 mr-b-1">
    <h4 class="mr-b-1">Mật khẩu</h4>
    <input type="password" placeholder="Mật khẩu" name="password" class="w-100 mr-b-2">
    <div class="d-flex justify-content-between ">
        <button class="btn bg--red pd-btn-2 border-r-1">Đăng nhập</button>
    </div>
    <h3><?php if (isset($status)) echo "Sai tài khoản hoặc mật khẩu" ?></h3>
</form>

</main>
</body>
</html>