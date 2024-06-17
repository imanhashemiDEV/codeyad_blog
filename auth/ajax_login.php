<?php
require_once "../functions/users.php";
require_once "../functions/helpers.php";
session_start();
if(isset($_SESSION['user'])){
    header('location: ../panel/index.php');
}
?>

<html dir="rtl" lang="fa-IR">
<head>
    <title>ورود</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
    <link href="<?php echo  asset('assets/Css/Main.css') ?>" rel="stylesheet" />
    <link href="<?php echo  asset('assets/Css/Style.css') ?>" rel="stylesheet" />
</head>
<body class="rtl bg-greengrad min-h">
    <section class="container maxw">
        <div class="card login  mx-md-5 mt-5 justify-content-center shadow-none">
            <div class="row">
    
                <div class="col-lg-6">
                    <div class="card-body p-4 text-center">
                            <a href="#"><img src="<?php echo  asset('assets/Img/logo-main.png') ?>" alt="logo" class="pt-2 pb-4"></a>
                        <form id="loginForm" method="POST">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control"  placeholder="ایمیل را وارد کنید">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="password" id="password" class="form-control" placeholder="کلمه عبور">
                            </div>
                            <button type="submit" name="submit" id="login" class="btn btn-block py-2 btn-success radius10 my-3">ورود</button>
                    
                            <p>هنوز ثبت نام نکرده اید ؟ <a href="register.php" class="text-drkprimary">عضویت در سایت</a></p>
                           </form>
         
                    </div>
                </div>
                <div class="col-lg-6 m-auto">
                    <img src="<?php echo  asset('assets/Img/login.jpg') ?>" class="img-fluid d-lg-block d-none" />
                </div>
               </div>
        </div>
    </section>

    <script src="../assets/jquery.js"></script>
    <script>
        $(document).ready(function (){
            $("#loginForm").submit(function (e){
                e.preventDefault()
                let email = $("#email").val()
                let password = $("#password").val()
                $.ajax({
                    method:"POST",
                    url: "../functions/ajax_login.php",
                    data: {
                        email: email,
                        password: password,
                    },
                    success: function( result ) {
                        let jsonData = JSON.parse(result)
                        console.log(jsonData.data)
                        if(jsonData.status){
                            location.href="../panel/index.php"
                        }else{
                            alert('اطلاعات نادرست است')
                        }
                    }
                });
            })
        })
    </script>
</body>
</html>