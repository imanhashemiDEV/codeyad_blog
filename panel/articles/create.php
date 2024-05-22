<?php require_once "../../functions/helpers.php" ?>
<?php require_once "../../functions/articles.php" ?>
<?php require_once "../../functions/categories.php" ?>
<?php require_once "../../functions/users.php" ?>
<?php
session_start();

if(!isset($_SESSION['user'])){
    header('location: ../auth/login.php');
}

$user_id = checkUser($_SESSION['user'])->id;

$categories = getAllCategories();

$error = "";
$message = "";
if (isset($_POST['submit'])) {
    if (
        isset($_POST['title']) && !empty($_POST['title'])
        && isset($_POST['body']) && !empty($_POST['body'])
        && isset($_POST['category_id']) && !empty($_POST['category_id'])
        && isset($_POST['status']) && !empty($_POST['status'])
        && isset($_FILES['image']) && !empty($_FILES['image']['name'])
    ){
         createArticle($_POST['title'], $_POST['body'],$user_id, $_POST['category_id'], $_POST['status'], $_FILES['image']);
         header('location: index.php');
    } else {
        $error = "لطفا تمام فیلد ها را تکمیل کنید";
    }
}

?>
<?php include "../layouts/head.php" ?>
<?php include "../layouts/navigation.php" ?>
<?php include "../layouts/header.php" ?>
<main class="main-content">
    <div class="card">
        <div class="card-body">
            <p style="color: red;"><?php if ($error !== "") {
                    echo $error;
                } ?>  </p>
            <p style="color: green;"><?php if ($message !== "") {
                    echo $message;
                } ?>  </p>
            <div class="container">
                <h6 class="card-title">ایجاد مقاله</h6>
                <form method="POST" action="create.php" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">عنوان مقاله</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" dir="rtl" name="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">متن مقاله</label>
                        <div class="col-sm-10">
                            <textarea class="form-control text-left" name="body" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">دسته بندی</label>
                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                            <?php foreach ($categories as $category){  ?>
                            <option value="<?php echo $category->id ?>"><?php echo $category->title ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">وضعیت</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                            <option value="draft">پیش نویس</option>
                            <option value="published">منتشر شده</option>
                            <option value="archived">بایگانی</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                        <input name="image" type="file" class="col-sm-10 form-control-file" id="file">
                    </div>
                    <div class="form-group row">
                        <button type="submit" name="submit" class="btn btn-success btn-uppercase">
                            <i class="ti-check-box m-r-5"></i> ذخیره
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include "../layouts/footer.php" ?>