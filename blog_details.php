<?php
require_once 'functions/helpers.php';
require_once 'functions/articles.php';

if(isset($_GET['id'])){
   $id = $_GET['id'];

   $article = getArticleById($id);
}
?>

<html dir="rtl" lang="fa-IR">
<head>
    <title>جزئیات وبلاگ</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
    <link href="<?php echo asset('assets/Css/Main.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('assets/Css/Menu-demo1.css') ?> " rel="stylesheet" />
    <link href=" <?php echo asset('assets/Css/Style.css" rel="stylesheet') ?>" />
</head>
<body class="rtl blog_details">
    <div class="main_wrap">
        <div class="of-site-mask"></div>

        <?php include "layouts/header.php"?>

        <div class="clearfix"></div>
        <?php include "layouts/breadcrumb.php"?>

        <section class="container mb-4">
            <div class="row">
                <?php include "layouts/navbar.php"?>
                <div class="col-xl-9  order-xl-1 order-0 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h2>نمایش <span class="text-primary">جزئیات</span></h2>
                        </div>
                        <div class="card-body p-sm-4">
                            <div class="item mb-4">

                                <div class="row">
                                    <div class="col-lg-12 mb-3 text-justify ">
                                        <a href="#" class="mb-3"><h2><?php echo $article->title ?></h2></a>
                                        <img src="<?php echo asset('images/articles/').$article->image ?>" alt="<?php echo $article->title ?>" class="img-fluid my-4 blogimg radius15" />
                                        <p><?php echo $article->body ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include "layouts/footer.php"?>
    </div>

    <script src="<?php echo asset('assets/Js/jquery.min.js') ?> "></script>
    <script src=" <?php echo asset('assets/Js/bootstrap.min.js') ?> "></script>
    <script src=" <?php echo asset('assets/Js/my-script.js') ?> "></script>
    <script src="<?php echo asset('assets/Js/custom.js') ?> "></script>
</body>
</html>