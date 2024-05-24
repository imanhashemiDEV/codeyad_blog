<?php require_once "../../functions/helpers.php" ?>
<?php require_once "../../functions/users.php" ?>
<?php require_once "../../functions/articles.php" ?>
<?php require_once "../../functions/categories.php" ?>
<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location: ../auth/login.php');
}

$articles = getAllArticles();
?>
<?php include "../layouts/head.php" ?>
<?php include "../layouts/navigation.php" ?>
<?php include "../layouts/header.php" ?>
<main class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="table overflow-auto" tabindex="8">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl">
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th class="text-center align-middle text-primary">ردیف</th>
                        <th class="text-center align-middle text-primary">عکس</th>
                        <th class="text-center align-middle text-primary">عنوان مقاله</th>
                        <th class="text-center align-middle text-primary">نویسنده</th>
                        <th class="text-center align-middle text-primary">دسته بندی</th>
                        <th class="text-center align-middle text-primary">وضعیت</th>
                        <th class="text-center align-middle text-primary">ویرایش</th>
                        <th class="text-center align-middle text-primary">حذف</th>
                        <th class="text-center align-middle text-primary">تاریخ ایجاد</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                    <?php foreach ($articles as $article){ ?>
                    <tr>
                        <td class="text-center align-middle"><?php echo $i++ ?></td>
                        <td class="text-center align-middle">
                            <figure class="avatar avatar">
                                <img src="<?php echo asset('images/articles/'. $article->image) ?>" class="rounded-circle" alt="image">
                            </figure>
                        </td>
                        <td class="text-center align-middle"><?php echo $article->title ?></td>
                        <td class="text-center align-middle"><?php echo getUserById($article->user_id)->name ?></td>
                        <td class="text-center align-middle"><?php echo getCategoryById($article->category_id)->title ?></td>
                        <td class="text-center align-middle"><?php echo status($article->status) ?></td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-info" href="<?php echo url('panel/articles/edit.php?id=') .$article->id   ?>">
                                ویرایش
                            </a>
                        </td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-info" href="<?php echo url('panel/articles/delete.php?id=') .$article->id   ?>">
                                حذف
                            </a>
                        </td>
                        <td class="text-center align-middle"><?php echo $article->created_at ?></td>
                    </tr>
                    <?php } ?>
                </table>
                <div style="margin: 40px !important;"
                     class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "../layouts/footer.php" ?>

