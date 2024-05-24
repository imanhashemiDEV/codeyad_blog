<?php
require_once 'functions/helpers.php';
require_once 'functions/articles.php';
require_once 'functions/categories.php';

$articles = getAllArticles();
?>

<html dir="rtl" lang="fa-IR">
<head>
    <title>وبلاگ</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
    <link href="<?php echo asset('assets/Css/Main.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('assets/Css/Menu-demo1.css') ?> " rel="stylesheet" />
    <link href=" <?php echo asset('assets/Css/Style.css" rel="stylesheet') ?>" />
</head>
<body class="rtl blog">
    <div class="main_wrap">
        <div class="of-site-mask"></div>
        
       <?php include "layouts/header.php"?>

        <div class="clearfix"></div>
        <?php include "layouts/breadcrumb.php"?>

        <section class="container mb-4">
            <div class="row">
                <?php include "layouts/navbar.php"?>
                <div class="col-xl-9  order-xl-1 order-0 mb-4">
              
                            <div class="row">
                                <?php foreach ($articles as $article){ ?>
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="card">
                                        <a href="<?php echo 'blog_details.php?id='.$article->id ?>"><img class="card-img-top" src="<?php echo asset('images/articles/'. $article->image)?>" alt="Card image"></a>
                                        <div class="card-body">
                                            <h2 class="IRANSans_Bold"><a href="<?php echo 'blog_details.php?id='.$article->id ?>"><?php echo $article->title ?></a></h2>
                                            <span class="text-primary fa12 IRANSans_Medium"><a href="#"> <?php echo getCategoryById($article->id)->title ?> </a></span>
                                            <p>
                                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان وب و گرافیک است…
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center mx-auto">
                            <ul class="pagination  justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item "><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item "><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
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