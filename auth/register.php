<?php
require_once "../functions/users.php";
require_once "../functions/helpers.php";
session_start();

if(isset($_SESSION['user'])){
    header('location: ../panel/index.php');
}

$error = "";
if (isset($_POST['submit'])) {
    if (
        isset($_POST['name']) && !empty($_POST['name'])
        && isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['password']) && !empty($_POST['password'])
    ) {
        if ($_POST['password'] === $_POST['confirm_password']) {
            if (checkPassword($_POST['password'])) {
                if (checkUser($_POST['email'])) {
                    $error = "این ایمیل تکراری است";
                } else {
                    // create new user
                    createUser($_POST['name'], $_POST['email'], $_POST['password'],null);
                    header('Location: login.php');
                }
            } else {
                $error = "رمز عبور شما حداقل باید 6 کاراکتر باشد";
            }
        } else {
            $error = "مقدار پسورد و تکرار آن برابر نیستند";
        }
    } else {
        $error = "لطفا تمام فیلد ها را تکمیل کنید";
    }
}

?>

<html dir="rtl" lang="fa-IR">
<head>
    <title>عضویت</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
    <link href="<?php echo  asset('assets/Css/Main.css') ?>" rel="stylesheet"/>
    <link href="<?php echo  asset('assets/Css/Style.css') ?>" rel="stylesheet"/>
</head>
<body class="rtl bg-greengrad min-h">
<section class="container maxw">
    <div class="card login  mx-md-5 mt-5 justify-content-center shadow-none">
        <div class="row">

            <div class="col-lg-6">
                <div class="card-body p-4 text-center">
                    <a href="#"><img src="<?php echo  asset('assets/Img/logo-main.png') ?>" alt="logo" class="pt-2 pb-4"></a>
                    <p style="color: red;"><?php if ($error !== "") {
                            echo $error;
                        } ?>  </p>
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control"
                                   placeholder="نام و نام خانوادگی">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="mail" class="form-control" placeholder="آدرس ایمیل">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="کلمه عبور">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="confirm_password" id="password" class="form-control"
                                   placeholder="تکرار کلمه عبور">
                        </div>
                        <button type="submit" name="submit" id="register"
                                class="btn btn-block btn-success py-2 radius10 mb-4">عضویت
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 m-auto">
                <img src="<?php echo  asset('assets/Img/login.jpg') ?>" class="img-fluid d-lg-block d-none"/>
            </div>
        </div>
    </div>
</section>
</body>

</html>