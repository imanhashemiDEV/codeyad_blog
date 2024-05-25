<?php

require_once 'functions/categories.php';

$categories = getAllCategories();
$lastArticles = getLastArticles();
?>

<div class="col-xl-3 order-xl-0 order-1 mb-4">

    <div class="card pcountry cati p-3 mb-3">
        <div class="d-flex flex-row justify-content-between bg-light py-2 px-4 my-2 bright radius15">
            <h2>دسته بندی ها</h2>
            <a href="#">- بیشتر -</a>
        </div>
        <ul class="list-unstyled">
            <?php foreach ($categories as $category){ ?>
            <li><a href="#"><img src="<?php echo asset('assets/Img/cati/img_2.jpg')?>" class="ml-2" /><span><?php echo $category->title ?></span></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="card thumb-post p-3 mb-3">
        <h2 class="bg-light py-2 px-4 mt-2 mb-4 bright radius15">آخرین مطالب</h2>
        <ul class="fa12">
            <?php foreach ($lastArticles as $lastArticle){ ?>
            <li>
                <div class="d-flex flex-row">
                    <a href="<?php echo 'blog_details.php?id='.$lastArticle->id ?>">
                        <img src="<?php echo asset('images/articles/'). $lastArticle->image ?>"  alt=""/>
                    </a>
                    <div class="m-2">
                        <p><a href="<?php echo 'blog_details.php?id='.$lastArticle->id ?>">
                                <?php echo $lastArticle->title ?></a></p>
                        <span>
                        <?php  echo $lastArticle->created_at ?></span>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>